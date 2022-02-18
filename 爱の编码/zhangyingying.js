document.getElementById('encode-btn').onclick = function () {
	let text = document.getElementById('textarea').value;
	if (text.length) {
		document.getElementById('textarea').value = encode(text);
	}
};

document.getElementById('decode-btn').onclick = function () {
	let text = document.getElementById('textarea').value.trim();
	if (text.length) {
		document.getElementById('textarea').value = decode(text);
	}
};
document.getElementById('clear-btn').onclick = function () {
	document.getElementById('textarea').value = '';
};

const corevalues = '张❤莹❤学❤姐❤我❤喜❤欢❤你❤一❤生❤二❤世❤';

function encode(codes) {
	let result = '';
	let bytes = str2utf8(codes);
	for (let i in bytes) {
		let hex = bytes[i].toString(16);
		for (let j in hex) {
			let vInt = parseInt(hex[j], 16);
			if (vInt < 10) {
				result += corevalues.substr(2 * vInt, 2);
			} else {
				let flag = randomBoolean();
				let a = flag ? 10 : 11;
				let b = flag ? 10 : 6;
				result += corevalues.substr(2 * a, 2);
				result += corevalues.substr(2 * (vInt - b), 2);
			}
		}
	}
	return result;
}

function decode(values) {
	if (values.length % 2 !== 0) {
		return null;
	}
	let bits = [];
	let preIndex = -1;

	for (let i = 0; i < values.length / 2; i++) {
		let ch = values.substr(2 * i, 2);
		let index = corevalues.indexOf(ch) / 2;
		if (index < 0) {
			return null;
		}

		if (preIndex >= 10) {
			bits.push(index + (preIndex === 10 ? 10 : 6));
		} else if (index < 10) {
			bits.push(index);
		}
		preIndex = index; // 存储之前标记位
	}

	let bytes = [];
	for (let i = 0; i < bits.length; i += 2) {
		let a = bits[i].toString(16);
		let b = bits[i + 1].toString(16);
		bytes.push(parseInt(a + b, 16));
	}
	return utf82str(bytes);
}

function str2utf8(str) {
	let c;
	let bytes = [];
	for (let i in str) {
		c = str.charCodeAt(i);
		if (c >= 0x010000 && c <= 0x10FFFF) {
			bytes.push(((c >> 18) & 0x07) | 0xF0);
			bytes.push(((c >> 12) & 0x3F) | 0x80);
			bytes.push(((c >> 6) & 0x3F) | 0x80);
			bytes.push((c & 0x3F) | 0x80);
		} else if (c >= 0x000800 && c <= 0x00FFFF) {
			bytes.push(((c >> 12) & 0x0F) | 0xE0);
			bytes.push(((c >> 6) & 0x3F) | 0x80);
			bytes.push((c & 0x3F) | 0x80);
		} else if (c >= 0x000080 && c <= 0x0007FF) {
			bytes.push(((c >> 6) & 0x1F) | 0xC0);
			bytes.push((c & 0x3F) | 0x80);
		} else {
			bytes.push(c & 0xFF);
		}
	}
	return bytes;
}

function utf82str(bytes) {
	let str = '';
	if (!Array.isArray(bytes)) {
		return str;
	}
	_arr = bytes;
	for (let i = 0; i < _arr.length; i++) {
		let one = _arr[i].toString(2);
		let v = one.match(/^1+?(?=0)/);
		if (v && one.length == 8) {
			let bytesLength = v[0].length;
			let store = _arr[i].toString(2).slice(7 - bytesLength);
			for (let st = 1; st < bytesLength; st++) {
				store += _arr[st + i].toString(2).slice(2);
			}
			str += String.fromCharCode(parseInt(store, 2));
			i += bytesLength - 1;
		} else {
			str += String.fromCharCode(_arr[i]);
		}
	}
	return str;
}

function randomBoolean() {
	return Math.random() >= 0.5 ? true : false;
}