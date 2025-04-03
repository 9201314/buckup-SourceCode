查Whois：https://www.dalao.net/thread-26835.htm

设置伪静态：

#根目录设：

location /
{
if (-f $request_filename) {
        break;
}
        rewrite ^/(.*)$ /index.php?domain=$1 last;
}


#多级目录，请修改index.php同级目录的对应位置：

location /多级目录/
{
if (-f $request_filename) {
        break;
}
        rewrite /多级目录/(.*)$ /多级目录/index.php?domain=$1 last;
}