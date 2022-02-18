VERSION 5.00
Begin VB.Form Form1 
   Caption         =   "计分系统 - 赵珊珊老师定制版"
   ClientHeight    =   7935
   ClientLeft      =   120
   ClientTop       =   465
   ClientWidth     =   14400
   LinkTopic       =   "Form1"
   ScaleHeight     =   7935
   ScaleWidth      =   14400
   StartUpPosition =   2  '屏幕中心
   Begin VB.CommandButton Command116 
      Caption         =   "save"
      Height          =   495
      Left            =   10200
      TabIndex        =   225
      Top             =   120
      Width           =   495
   End
   Begin VB.CommandButton Command115 
      Caption         =   "save"
      Height          =   495
      Left            =   7680
      TabIndex        =   224
      Top             =   120
      Width           =   495
   End
   Begin VB.CommandButton Command114 
      Caption         =   "save"
      Height          =   495
      Left            =   5160
      TabIndex        =   223
      Top             =   120
      Width           =   495
   End
   Begin VB.CommandButton Command113 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   222
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command58 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   219
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command112 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   218
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command57 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   215
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command111 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   214
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command56 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   211
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command110 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   210
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command55 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   207
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command109 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   206
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command54 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   203
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command108 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   202
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command53 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   199
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command107 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   198
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command52 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   195
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command106 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   194
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command51 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   191
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command105 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   190
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command50 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   187
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command104 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   186
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command49 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   183
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command103 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   13800
      TabIndex        =   182
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command48 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   12600
      TabIndex        =   179
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command102 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   178
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command47 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   175
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command101 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   174
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command46 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   171
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command100 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   170
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command45 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   167
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command99 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   166
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command44 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   163
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command98 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   162
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command43 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   159
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command97 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   158
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command42 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   155
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command96 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   154
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command41 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   151
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command95 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   150
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command40 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   147
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command94 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   146
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command39 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   143
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command93 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   142
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command38 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   139
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command92 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   10920
      TabIndex        =   138
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command37 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   9720
      TabIndex        =   135
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command91 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   134
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command36 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   131
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command90 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   130
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command35 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   127
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command89 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   126
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command34 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   123
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command88 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   122
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command33 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   119
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command87 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   118
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command32 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   115
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command86 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   114
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command31 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   111
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command85 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   110
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command30 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   107
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command84 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   106
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command29 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   103
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command83 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   102
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command28 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   99
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command82 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   98
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command27 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   95
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command81 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   8040
      TabIndex        =   94
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command26 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   6840
      TabIndex        =   91
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command80 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   90
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command25 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   87
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command79 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   86
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command24 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   83
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command78 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   82
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command23 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   79
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command77 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   78
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command22 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   75
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command76 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   74
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command21 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   71
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command75 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   70
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command20 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   67
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command74 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   66
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command19 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   63
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command73 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   62
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command18 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   59
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command72 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   58
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command17 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   55
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command71 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   54
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command16 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   51
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command70 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   5160
      TabIndex        =   50
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command15 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   3960
      TabIndex        =   47
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command69 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   46
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command14 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   43
      Top             =   6840
      Width           =   495
   End
   Begin VB.CommandButton Command68 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   42
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command13 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   39
      Top             =   6240
      Width           =   495
   End
   Begin VB.CommandButton Command67 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   38
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command12 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   35
      Top             =   5640
      Width           =   495
   End
   Begin VB.CommandButton Command66 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   34
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command11 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   31
      Top             =   5040
      Width           =   495
   End
   Begin VB.CommandButton Command65 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   30
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command10 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   27
      Top             =   4440
      Width           =   495
   End
   Begin VB.CommandButton Command64 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   26
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command9 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   23
      Top             =   3840
      Width           =   495
   End
   Begin VB.CommandButton Command63 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   22
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command8 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   19
      Top             =   3240
      Width           =   495
   End
   Begin VB.CommandButton Command62 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   18
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command7 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   15
      Top             =   2640
      Width           =   495
   End
   Begin VB.CommandButton Command61 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   14
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command6 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   11
      Top             =   2040
      Width           =   495
   End
   Begin VB.CommandButton Command60 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   10
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command5 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   7
      Top             =   1440
      Width           =   495
   End
   Begin VB.CommandButton Command59 
      Caption         =   "+"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   2280
      TabIndex        =   6
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command4 
      Caption         =   "-"
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   26.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   495
      Left            =   1080
      TabIndex        =   3
      Top             =   840
      Width           =   495
   End
   Begin VB.CommandButton Command3 
      Caption         =   "引申交际性问题"
      Height          =   495
      Left            =   8640
      TabIndex        =   2
      Top             =   120
      Width           =   1455
   End
   Begin VB.CommandButton Command2 
      Caption         =   "综合理解性问题"
      Height          =   495
      Left            =   6120
      TabIndex        =   1
      Top             =   120
      Width           =   1455
   End
   Begin VB.CommandButton Command1 
      Caption         =   "表层分析性问题"
      Height          =   495
      Left            =   3600
      TabIndex        =   0
      Top             =   120
      Width           =   1455
   End
   Begin VB.Label Label3 
      BackColor       =   &H00000000&
      Caption         =   " Copyright THANK YOU LIMITED（雅心有限公司）All Rights Reserved."
      BeginProperty Font 
         Name            =   "Consolas"
         Size            =   18
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ForeColor       =   &H00FFFF00&
      Height          =   375
      Left            =   960
      MousePointer    =   12  'No Drop
      TabIndex        =   226
      Top             =   7440
      Width           =   12495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   54
      Left            =   11640
      TabIndex        =   221
      Top             =   6960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   54
      Left            =   13200
      TabIndex        =   220
      Top             =   6960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   53
      Left            =   11640
      TabIndex        =   217
      Top             =   6360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   53
      Left            =   13200
      TabIndex        =   216
      Top             =   6360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   52
      Left            =   11640
      TabIndex        =   213
      Top             =   5760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   52
      Left            =   13200
      TabIndex        =   212
      Top             =   5760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   51
      Left            =   11640
      TabIndex        =   209
      Top             =   5160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   51
      Left            =   13200
      TabIndex        =   208
      Top             =   5160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   50
      Left            =   11640
      TabIndex        =   205
      Top             =   4560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   50
      Left            =   13200
      TabIndex        =   204
      Top             =   4560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   49
      Left            =   11640
      TabIndex        =   201
      Top             =   3960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   49
      Left            =   13200
      TabIndex        =   200
      Top             =   3960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   48
      Left            =   11640
      TabIndex        =   197
      Top             =   3360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   48
      Left            =   13200
      TabIndex        =   196
      Top             =   3360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   47
      Left            =   11640
      TabIndex        =   193
      Top             =   2760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   47
      Left            =   13200
      TabIndex        =   192
      Top             =   2760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   46
      Left            =   11640
      TabIndex        =   189
      Top             =   2160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   46
      Left            =   13200
      TabIndex        =   188
      Top             =   2160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   45
      Left            =   11640
      TabIndex        =   185
      Top             =   1560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   45
      Left            =   13200
      TabIndex        =   184
      Top             =   1560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   44
      Left            =   11640
      TabIndex        =   181
      Top             =   960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   44
      Left            =   13200
      TabIndex        =   180
      Top             =   960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   43
      Left            =   8760
      TabIndex        =   177
      Top             =   6960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   43
      Left            =   10320
      TabIndex        =   176
      Top             =   6960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   42
      Left            =   8760
      TabIndex        =   173
      Top             =   6360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   42
      Left            =   10320
      TabIndex        =   172
      Top             =   6360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   41
      Left            =   8760
      TabIndex        =   169
      Top             =   5760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   41
      Left            =   10320
      TabIndex        =   168
      Top             =   5760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   40
      Left            =   8760
      TabIndex        =   165
      Top             =   5160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   40
      Left            =   10320
      TabIndex        =   164
      Top             =   5160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   39
      Left            =   8760
      TabIndex        =   161
      Top             =   4560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   39
      Left            =   10320
      TabIndex        =   160
      Top             =   4560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   38
      Left            =   8760
      TabIndex        =   157
      Top             =   3960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   38
      Left            =   10320
      TabIndex        =   156
      Top             =   3960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   37
      Left            =   8760
      TabIndex        =   153
      Top             =   3360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   37
      Left            =   10320
      TabIndex        =   152
      Top             =   3360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   36
      Left            =   8760
      TabIndex        =   149
      Top             =   2760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   36
      Left            =   10320
      TabIndex        =   148
      Top             =   2760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   35
      Left            =   8760
      TabIndex        =   145
      Top             =   2160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   35
      Left            =   10320
      TabIndex        =   144
      Top             =   2160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   34
      Left            =   8760
      TabIndex        =   141
      Top             =   1560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   34
      Left            =   10320
      TabIndex        =   140
      Top             =   1560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   33
      Left            =   8760
      TabIndex        =   137
      Top             =   960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   33
      Left            =   10320
      TabIndex        =   136
      Top             =   960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   32
      Left            =   5880
      TabIndex        =   133
      Top             =   6960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   32
      Left            =   7440
      TabIndex        =   132
      Top             =   6960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   31
      Left            =   5880
      TabIndex        =   129
      Top             =   6360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   31
      Left            =   7440
      TabIndex        =   128
      Top             =   6360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   30
      Left            =   5880
      TabIndex        =   125
      Top             =   5760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   30
      Left            =   7440
      TabIndex        =   124
      Top             =   5760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   29
      Left            =   5880
      TabIndex        =   121
      Top             =   5160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   29
      Left            =   7440
      TabIndex        =   120
      Top             =   5160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   28
      Left            =   5880
      TabIndex        =   117
      Top             =   4560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   28
      Left            =   7440
      TabIndex        =   116
      Top             =   4560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   27
      Left            =   5880
      TabIndex        =   113
      Top             =   3960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   27
      Left            =   7440
      TabIndex        =   112
      Top             =   3960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   26
      Left            =   5880
      TabIndex        =   109
      Top             =   3360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   26
      Left            =   7440
      TabIndex        =   108
      Top             =   3360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   25
      Left            =   5880
      TabIndex        =   105
      Top             =   2760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   25
      Left            =   7440
      TabIndex        =   104
      Top             =   2760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   24
      Left            =   5880
      TabIndex        =   101
      Top             =   2160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   24
      Left            =   7440
      TabIndex        =   100
      Top             =   2160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   23
      Left            =   5880
      TabIndex        =   97
      Top             =   1560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   23
      Left            =   7440
      TabIndex        =   96
      Top             =   1560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   22
      Left            =   5880
      TabIndex        =   93
      Top             =   960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   22
      Left            =   7440
      TabIndex        =   92
      Top             =   960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   21
      Left            =   3000
      TabIndex        =   89
      Top             =   6960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   21
      Left            =   4560
      TabIndex        =   88
      Top             =   6960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   20
      Left            =   3000
      TabIndex        =   85
      Top             =   6360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   20
      Left            =   4560
      TabIndex        =   84
      Top             =   6360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   19
      Left            =   3000
      TabIndex        =   81
      Top             =   5760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   19
      Left            =   4560
      TabIndex        =   80
      Top             =   5760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   18
      Left            =   3000
      TabIndex        =   77
      Top             =   5160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   18
      Left            =   4560
      TabIndex        =   76
      Top             =   5160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   17
      Left            =   3000
      TabIndex        =   73
      Top             =   4560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   17
      Left            =   4560
      TabIndex        =   72
      Top             =   4560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   16
      Left            =   3000
      TabIndex        =   69
      Top             =   3960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   16
      Left            =   4560
      TabIndex        =   68
      Top             =   3960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   15
      Left            =   3000
      TabIndex        =   65
      Top             =   3360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   15
      Left            =   4560
      TabIndex        =   64
      Top             =   3360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   14
      Left            =   3000
      TabIndex        =   61
      Top             =   2760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   14
      Left            =   4560
      TabIndex        =   60
      Top             =   2760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   13
      Left            =   3000
      TabIndex        =   57
      Top             =   2160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   13
      Left            =   4560
      TabIndex        =   56
      Top             =   2160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   12
      Left            =   3000
      TabIndex        =   53
      Top             =   1560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   12
      Left            =   4560
      TabIndex        =   52
      Top             =   1560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   11
      Left            =   3000
      TabIndex        =   49
      Top             =   960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   11
      Left            =   4560
      TabIndex        =   48
      Top             =   960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   10
      Left            =   120
      TabIndex        =   45
      Top             =   6960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   10
      Left            =   1680
      TabIndex        =   44
      Top             =   6960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   9
      Left            =   120
      TabIndex        =   41
      Top             =   6360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   9
      Left            =   1680
      TabIndex        =   40
      Top             =   6360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   8
      Left            =   120
      TabIndex        =   37
      Top             =   5760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   8
      Left            =   1680
      TabIndex        =   36
      Top             =   5760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   7
      Left            =   120
      TabIndex        =   33
      Top             =   5160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   7
      Left            =   1680
      TabIndex        =   32
      Top             =   5160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   6
      Left            =   120
      TabIndex        =   29
      Top             =   4560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   6
      Left            =   1680
      TabIndex        =   28
      Top             =   4560
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   5
      Left            =   120
      TabIndex        =   25
      Top             =   3960
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   5
      Left            =   1680
      TabIndex        =   24
      Top             =   3960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   4
      Left            =   120
      TabIndex        =   21
      Top             =   3360
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   4
      Left            =   1680
      TabIndex        =   20
      Top             =   3360
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   3
      Left            =   120
      TabIndex        =   17
      Top             =   2760
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   3
      Left            =   1680
      TabIndex        =   16
      Top             =   2760
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   2
      Left            =   120
      TabIndex        =   13
      Top             =   2160
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   2
      Left            =   1680
      TabIndex        =   12
      Top             =   2160
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   1
      Left            =   120
      TabIndex        =   9
      Top             =   1560
      Width           =   855
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   1
      Left            =   1680
      TabIndex        =   8
      Top             =   1560
      Width           =   495
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   0
      Left            =   1680
      TabIndex        =   5
      Top             =   960
      Width           =   495
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      BeginProperty Font 
         Name            =   "宋体"
         Size            =   14.25
         Charset         =   134
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   255
      Index           =   0
      Left            =   120
      TabIndex        =   4
      Top             =   960
      Width           =   855
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim xlApp As Excel.Application
Dim xlBook As Excel.Workbook
Dim xlSheet As Excel.Worksheet

Private Sub Command114_Click()
Set xlBook = xlApp.Workbooks.Open(App.Path & "\donotmodify.xlsx")
Set xlSheet = xlBook.Worksheets("sheet1")
xlSheet.Cells(2, 2) = Label2(0)
xlSheet.Cells(3, 2) = Label2(1)
xlSheet.Cells(4, 2) = Label2(2)
xlSheet.Cells(5, 2) = Label2(3)
xlSheet.Cells(6, 2) = Label2(4)
xlSheet.Cells(7, 2) = Label2(5)
xlSheet.Cells(8, 2) = Label2(6)
xlSheet.Cells(9, 2) = Label2(7)
xlSheet.Cells(10, 2) = Label2(8)
xlSheet.Cells(11, 2) = Label2(9)
xlSheet.Cells(12, 2) = Label2(10)
xlSheet.Cells(13, 2) = Label2(11)
xlSheet.Cells(14, 2) = Label2(12)
xlSheet.Cells(15, 2) = Label2(13)
xlSheet.Cells(16, 2) = Label2(14)
xlSheet.Cells(17, 2) = Label2(15)
xlSheet.Cells(18, 2) = Label2(16)
xlSheet.Cells(19, 2) = Label2(17)
xlSheet.Cells(20, 2) = Label2(18)
xlSheet.Cells(21, 2) = Label2(19)
xlSheet.Cells(22, 2) = Label2(20)
xlSheet.Cells(23, 2) = Label2(21)
xlSheet.Cells(24, 2) = Label2(22)
xlSheet.Cells(25, 2) = Label2(23)
xlSheet.Cells(26, 2) = Label2(24)
xlSheet.Cells(27, 2) = Label2(25)
xlSheet.Cells(28, 2) = Label2(26)
xlSheet.Cells(29, 2) = Label2(27)
xlSheet.Cells(30, 2) = Label2(28)
xlSheet.Cells(31, 2) = Label2(29)
xlSheet.Cells(32, 2) = Label2(30)
xlSheet.Cells(33, 2) = Label2(31)
xlSheet.Cells(34, 2) = Label2(32)
xlSheet.Cells(35, 2) = Label2(33)
xlSheet.Cells(36, 2) = Label2(34)
xlSheet.Cells(37, 2) = Label2(35)
xlSheet.Cells(38, 2) = Label2(36)
xlSheet.Cells(39, 2) = Label2(37)
xlSheet.Cells(40, 2) = Label2(38)
xlSheet.Cells(41, 2) = Label2(39)
xlSheet.Cells(42, 2) = Label2(40)
xlSheet.Cells(43, 2) = Label2(41)
xlSheet.Cells(44, 2) = Label2(42)
xlSheet.Cells(45, 2) = Label2(43)
xlSheet.Cells(46, 2) = Label2(44)
xlSheet.Cells(47, 2) = Label2(45)
xlSheet.Cells(48, 2) = Label2(46)
xlSheet.Cells(49, 2) = Label2(47)
xlSheet.Cells(50, 2) = Label2(48)
xlSheet.Cells(51, 2) = Label2(49)
xlSheet.Cells(52, 2) = Label2(50)
xlSheet.Cells(53, 2) = Label2(51)
xlSheet.Cells(54, 2) = Label2(52)
xlSheet.Cells(55, 2) = Label2(53)
xlSheet.Cells(56, 2) = Label2(54)
xlBook.Save
End Sub

Private Sub Command115_Click()
Set xlBook = xlApp.Workbooks.Open(App.Path & "\donotmodify.xlsx")
Set xlSheet = xlBook.Worksheets("sheet1")
xlSheet.Cells(2, 3) = Label2(0)
xlSheet.Cells(3, 3) = Label2(1)
xlSheet.Cells(4, 3) = Label2(2)
xlSheet.Cells(5, 3) = Label2(3)
xlSheet.Cells(6, 3) = Label2(4)
xlSheet.Cells(7, 3) = Label2(5)
xlSheet.Cells(8, 3) = Label2(6)
xlSheet.Cells(9, 3) = Label2(7)
xlSheet.Cells(10, 3) = Label2(8)
xlSheet.Cells(11, 3) = Label2(9)
xlSheet.Cells(12, 3) = Label2(10)
xlSheet.Cells(13, 3) = Label2(11)
xlSheet.Cells(14, 3) = Label2(12)
xlSheet.Cells(15, 3) = Label2(13)
xlSheet.Cells(16, 3) = Label2(14)
xlSheet.Cells(17, 3) = Label2(15)
xlSheet.Cells(18, 3) = Label2(16)
xlSheet.Cells(19, 3) = Label2(17)
xlSheet.Cells(20, 3) = Label2(18)
xlSheet.Cells(21, 3) = Label2(19)
xlSheet.Cells(22, 3) = Label2(20)
xlSheet.Cells(23, 3) = Label2(21)
xlSheet.Cells(24, 3) = Label2(22)
xlSheet.Cells(25, 3) = Label2(23)
xlSheet.Cells(26, 3) = Label2(24)
xlSheet.Cells(27, 3) = Label2(25)
xlSheet.Cells(28, 3) = Label2(26)
xlSheet.Cells(29, 3) = Label2(27)
xlSheet.Cells(30, 3) = Label2(28)
xlSheet.Cells(31, 3) = Label2(29)
xlSheet.Cells(32, 3) = Label2(30)
xlSheet.Cells(33, 3) = Label2(31)
xlSheet.Cells(34, 3) = Label2(32)
xlSheet.Cells(35, 3) = Label2(33)
xlSheet.Cells(36, 3) = Label2(34)
xlSheet.Cells(37, 3) = Label2(35)
xlSheet.Cells(38, 3) = Label2(36)
xlSheet.Cells(39, 3) = Label2(37)
xlSheet.Cells(40, 3) = Label2(38)
xlSheet.Cells(41, 3) = Label2(39)
xlSheet.Cells(42, 3) = Label2(40)
xlSheet.Cells(43, 3) = Label2(41)
xlSheet.Cells(44, 3) = Label2(42)
xlSheet.Cells(45, 3) = Label2(43)
xlSheet.Cells(46, 3) = Label2(44)
xlSheet.Cells(47, 3) = Label2(45)
xlSheet.Cells(48, 3) = Label2(46)
xlSheet.Cells(49, 3) = Label2(47)
xlSheet.Cells(50, 3) = Label2(48)
xlSheet.Cells(51, 3) = Label2(49)
xlSheet.Cells(52, 3) = Label2(50)
xlSheet.Cells(53, 3) = Label2(51)
xlSheet.Cells(54, 3) = Label2(52)
xlSheet.Cells(55, 3) = Label2(53)
xlSheet.Cells(56, 3) = Label2(54)
xlBook.Save
End Sub

Private Sub Command116_Click()
Set xlBook = xlApp.Workbooks.Open(App.Path & "\donotmodify.xlsx")
Set xlSheet = xlBook.Worksheets("sheet1")
xlSheet.Cells(2, 4) = Label2(0)
xlSheet.Cells(3, 4) = Label2(1)
xlSheet.Cells(4, 4) = Label2(2)
xlSheet.Cells(5, 4) = Label2(3)
xlSheet.Cells(6, 4) = Label2(4)
xlSheet.Cells(7, 4) = Label2(5)
xlSheet.Cells(8, 4) = Label2(6)
xlSheet.Cells(9, 4) = Label2(7)
xlSheet.Cells(10, 4) = Label2(8)
xlSheet.Cells(11, 4) = Label2(9)
xlSheet.Cells(12, 4) = Label2(10)
xlSheet.Cells(13, 4) = Label2(11)
xlSheet.Cells(14, 4) = Label2(12)
xlSheet.Cells(15, 4) = Label2(13)
xlSheet.Cells(16, 4) = Label2(14)
xlSheet.Cells(17, 4) = Label2(15)
xlSheet.Cells(18, 4) = Label2(16)
xlSheet.Cells(19, 4) = Label2(17)
xlSheet.Cells(20, 4) = Label2(18)
xlSheet.Cells(21, 4) = Label2(19)
xlSheet.Cells(22, 4) = Label2(20)
xlSheet.Cells(23, 4) = Label2(21)
xlSheet.Cells(24, 4) = Label2(22)
xlSheet.Cells(25, 4) = Label2(23)
xlSheet.Cells(26, 4) = Label2(24)
xlSheet.Cells(27, 4) = Label2(25)
xlSheet.Cells(28, 4) = Label2(26)
xlSheet.Cells(29, 4) = Label2(27)
xlSheet.Cells(30, 4) = Label2(28)
xlSheet.Cells(31, 4) = Label2(29)
xlSheet.Cells(32, 4) = Label2(30)
xlSheet.Cells(33, 4) = Label2(31)
xlSheet.Cells(34, 4) = Label2(32)
xlSheet.Cells(35, 4) = Label2(33)
xlSheet.Cells(36, 4) = Label2(34)
xlSheet.Cells(37, 4) = Label2(35)
xlSheet.Cells(38, 4) = Label2(36)
xlSheet.Cells(39, 4) = Label2(37)
xlSheet.Cells(40, 4) = Label2(38)
xlSheet.Cells(41, 4) = Label2(39)
xlSheet.Cells(42, 4) = Label2(40)
xlSheet.Cells(43, 4) = Label2(41)
xlSheet.Cells(44, 4) = Label2(42)
xlSheet.Cells(45, 4) = Label2(43)
xlSheet.Cells(46, 4) = Label2(44)
xlSheet.Cells(47, 4) = Label2(45)
xlSheet.Cells(48, 4) = Label2(46)
xlSheet.Cells(49, 4) = Label2(47)
xlSheet.Cells(50, 4) = Label2(48)
xlSheet.Cells(51, 4) = Label2(49)
xlSheet.Cells(52, 4) = Label2(50)
xlSheet.Cells(53, 4) = Label2(51)
xlSheet.Cells(54, 4) = Label2(52)
xlSheet.Cells(55, 4) = Label2(53)
xlSheet.Cells(56, 4) = Label2(54)
xlBook.Save
End Sub

Private Sub Command15_Click()
Label2(11) = Val(Label2(11)) - 1
End Sub

Private Sub Comman15_Click()

End Sub

Private Sub Command1_Click()
Label2(0) = xlSheet.Cells(2, 2)
Label2(1) = xlSheet.Cells(3, 2)
Label2(2) = xlSheet.Cells(4, 2)
Label2(3) = xlSheet.Cells(5, 2)
Label2(4) = xlSheet.Cells(6, 2)
Label2(5) = xlSheet.Cells(7, 2)
Label2(6) = xlSheet.Cells(8, 2)
Label2(7) = xlSheet.Cells(9, 2)
Label2(8) = xlSheet.Cells(10, 2)
Label2(9) = xlSheet.Cells(11, 2)
Label2(10) = xlSheet.Cells(12, 2)
Label2(11) = xlSheet.Cells(13, 2)
Label2(12) = xlSheet.Cells(14, 2)
Label2(13) = xlSheet.Cells(15, 2)
Label2(14) = xlSheet.Cells(16, 2)
Label2(15) = xlSheet.Cells(17, 2)
Label2(16) = xlSheet.Cells(18, 2)
Label2(17) = xlSheet.Cells(19, 2)
Label2(18) = xlSheet.Cells(20, 2)
Label2(19) = xlSheet.Cells(21, 2)
Label2(20) = xlSheet.Cells(22, 2)
Label2(21) = xlSheet.Cells(23, 2)
Label2(22) = xlSheet.Cells(24, 2)
Label2(23) = xlSheet.Cells(25, 2)
Label2(24) = xlSheet.Cells(26, 2)
Label2(25) = xlSheet.Cells(27, 2)
Label2(26) = xlSheet.Cells(28, 2)
Label2(27) = xlSheet.Cells(29, 2)
Label2(28) = xlSheet.Cells(30, 2)
Label2(29) = xlSheet.Cells(31, 2)
Label2(30) = xlSheet.Cells(32, 2)
Label2(31) = xlSheet.Cells(33, 2)
Label2(32) = xlSheet.Cells(34, 2)
Label2(33) = xlSheet.Cells(35, 2)
Label2(34) = xlSheet.Cells(36, 2)
Label2(35) = xlSheet.Cells(37, 2)
Label2(36) = xlSheet.Cells(38, 2)
Label2(37) = xlSheet.Cells(39, 2)
Label2(38) = xlSheet.Cells(40, 2)
Label2(39) = xlSheet.Cells(41, 2)
Label2(40) = xlSheet.Cells(42, 2)
Label2(41) = xlSheet.Cells(43, 2)
Label2(42) = xlSheet.Cells(44, 2)
Label2(43) = xlSheet.Cells(45, 2)
Label2(44) = xlSheet.Cells(46, 2)
Label2(45) = xlSheet.Cells(47, 2)
Label2(46) = xlSheet.Cells(48, 2)
Label2(47) = xlSheet.Cells(49, 2)
Label2(48) = xlSheet.Cells(50, 2)
Label2(49) = xlSheet.Cells(51, 2)
Label2(50) = xlSheet.Cells(52, 2)
Label2(51) = xlSheet.Cells(53, 2)
Label2(52) = xlSheet.Cells(54, 2)
Label2(53) = xlSheet.Cells(55, 2)
Label2(54) = xlSheet.Cells(56, 2)
End Sub

Private Sub Command10_Click()
Label2(6) = Val(Label2(6)) - 1
End Sub

Private Sub Command100_Click()
Label2(41) = Val(Label2(41)) + 1
End Sub

Private Sub Command101_Click()
Label2(42) = Val(Label2(42)) + 1
End Sub

Private Sub Command102_Click()
Label2(43) = Val(Label2(43)) + 1
End Sub

Private Sub Command103_Click()
Label2(44) = Val(Label2(44)) + 1
End Sub

Private Sub Command104_Click()
Label2(45) = Val(Label2(45)) + 1
End Sub

Private Sub Command105_Click()
Label2(46) = Val(Label2(46)) + 1
End Sub

Private Sub Command106_Click()
Label2(47) = Val(Label2(47)) + 1
End Sub

Private Sub Command107_Click()
Label2(48) = Val(Label2(48)) + 1
End Sub

Private Sub Command108_Click()
Label2(49) = Val(Label2(49)) + 1
End Sub

Private Sub Command109_Click()
Label2(50) = Val(Label2(50)) + 1
End Sub

Private Sub Command11_Click()
Label2(7) = Val(Label2(7)) - 1
End Sub

Private Sub Command110_Click()
Label2(51) = Val(Label2(51)) + 1
End Sub

Private Sub Command111_Click()
Label2(52) = Val(Label2(52)) + 1
End Sub

Private Sub Command112_Click()
Label2(53) = Val(Label2(53)) + 1
End Sub

Private Sub Command113_Click()
Label2(54) = Val(Label2(54)) + 1
End Sub

Private Sub Command12_Click()
Label2(8) = Val(Label2(8)) - 1
End Sub

Private Sub Command13_Click()
Label2(9) = Val(Label2(9)) - 1
End Sub

Private Sub Command14_Click()
Label2(10) = Val(Label2(10)) - 1
End Sub

Private Sub Command16_Click()
Label2(12) = Val(Label2(12)) - 1
End Sub

Private Sub Command17_Click()
Label2(13) = Val(Label2(13)) - 1
End Sub

Private Sub Command18_Click()
Label2(14) = Val(Label2(14)) - 1
End Sub

Private Sub Command19_Click()
Label2(15) = Val(Label2(15)) - 1
End Sub

Private Sub Command2_Click()
Label2(0) = xlSheet.Cells(2, 3)
Label2(1) = xlSheet.Cells(3, 3)
Label2(2) = xlSheet.Cells(4, 3)
Label2(3) = xlSheet.Cells(5, 3)
Label2(4) = xlSheet.Cells(6, 3)
Label2(5) = xlSheet.Cells(7, 3)
Label2(6) = xlSheet.Cells(8, 3)
Label2(7) = xlSheet.Cells(9, 3)
Label2(8) = xlSheet.Cells(10, 3)
Label2(9) = xlSheet.Cells(11, 3)
Label2(10) = xlSheet.Cells(12, 3)
Label2(11) = xlSheet.Cells(13, 3)
Label2(12) = xlSheet.Cells(14, 3)
Label2(13) = xlSheet.Cells(15, 3)
Label2(14) = xlSheet.Cells(16, 3)
Label2(15) = xlSheet.Cells(17, 3)
Label2(16) = xlSheet.Cells(18, 3)
Label2(17) = xlSheet.Cells(19, 3)
Label2(18) = xlSheet.Cells(20, 3)
Label2(19) = xlSheet.Cells(21, 3)
Label2(20) = xlSheet.Cells(22, 3)
Label2(21) = xlSheet.Cells(23, 3)
Label2(22) = xlSheet.Cells(24, 3)
Label2(23) = xlSheet.Cells(25, 3)
Label2(24) = xlSheet.Cells(26, 3)
Label2(25) = xlSheet.Cells(27, 3)
Label2(26) = xlSheet.Cells(28, 3)
Label2(27) = xlSheet.Cells(29, 3)
Label2(28) = xlSheet.Cells(30, 3)
Label2(29) = xlSheet.Cells(31, 3)
Label2(30) = xlSheet.Cells(32, 3)
Label2(31) = xlSheet.Cells(33, 3)
Label2(32) = xlSheet.Cells(34, 3)
Label2(33) = xlSheet.Cells(35, 3)
Label2(34) = xlSheet.Cells(36, 3)
Label2(35) = xlSheet.Cells(37, 3)
Label2(36) = xlSheet.Cells(38, 3)
Label2(37) = xlSheet.Cells(39, 3)
Label2(38) = xlSheet.Cells(40, 3)
Label2(39) = xlSheet.Cells(41, 3)
Label2(40) = xlSheet.Cells(42, 3)
Label2(41) = xlSheet.Cells(43, 3)
Label2(42) = xlSheet.Cells(44, 3)
Label2(43) = xlSheet.Cells(45, 3)
Label2(44) = xlSheet.Cells(46, 3)
Label2(45) = xlSheet.Cells(47, 3)
Label2(46) = xlSheet.Cells(48, 3)
Label2(47) = xlSheet.Cells(49, 3)
Label2(48) = xlSheet.Cells(50, 3)
Label2(49) = xlSheet.Cells(51, 3)
Label2(50) = xlSheet.Cells(52, 3)
Label2(51) = xlSheet.Cells(53, 3)
Label2(52) = xlSheet.Cells(54, 3)
Label2(53) = xlSheet.Cells(55, 3)
Label2(54) = xlSheet.Cells(56, 3)
End Sub

Private Sub Command20_Click()
Label2(16) = Val(Label2(16)) - 1
End Sub

Private Sub Command21_Click()
Label2(17) = Val(Label2(17)) - 1
End Sub

Private Sub Command22_Click()
Label2(18) = Val(Label2(18)) - 1
End Sub

Private Sub Command23_Click()
Label2(19) = Val(Label2(19)) - 1
End Sub

Private Sub Command24_Click()
Label2(20) = Val(Label2(20)) - 1
End Sub

Private Sub Command25_Click()
Label2(21) = Val(Label2(21)) - 1
End Sub

Private Sub Command26_Click()
Label2(22) = Val(Label2(22)) - 1
End Sub

Private Sub Command27_Click()
Label2(23) = Val(Label2(23)) - 1
End Sub

Private Sub Command28_Click()
Label2(24) = Val(Label2(24)) - 1
End Sub

Private Sub Command29_Click()
Label2(25) = Val(Label2(25)) - 1
End Sub

Private Sub Command3_Click()
Label2(0) = xlSheet.Cells(2, 4)
Label2(1) = xlSheet.Cells(3, 4)
Label2(2) = xlSheet.Cells(4, 4)
Label2(3) = xlSheet.Cells(5, 4)
Label2(4) = xlSheet.Cells(6, 4)
Label2(5) = xlSheet.Cells(7, 4)
Label2(6) = xlSheet.Cells(8, 4)
Label2(7) = xlSheet.Cells(9, 4)
Label2(8) = xlSheet.Cells(10, 4)
Label2(9) = xlSheet.Cells(11, 4)
Label2(10) = xlSheet.Cells(12, 4)
Label2(11) = xlSheet.Cells(13, 4)
Label2(12) = xlSheet.Cells(14, 4)
Label2(13) = xlSheet.Cells(15, 4)
Label2(14) = xlSheet.Cells(16, 4)
Label2(15) = xlSheet.Cells(17, 4)
Label2(16) = xlSheet.Cells(18, 4)
Label2(17) = xlSheet.Cells(19, 4)
Label2(18) = xlSheet.Cells(20, 4)
Label2(19) = xlSheet.Cells(21, 4)
Label2(20) = xlSheet.Cells(22, 4)
Label2(21) = xlSheet.Cells(23, 4)
Label2(22) = xlSheet.Cells(24, 4)
Label2(23) = xlSheet.Cells(25, 4)
Label2(24) = xlSheet.Cells(26, 4)
Label2(25) = xlSheet.Cells(27, 4)
Label2(26) = xlSheet.Cells(28, 4)
Label2(27) = xlSheet.Cells(29, 4)
Label2(28) = xlSheet.Cells(30, 4)
Label2(29) = xlSheet.Cells(31, 4)
Label2(30) = xlSheet.Cells(32, 4)
Label2(31) = xlSheet.Cells(33, 4)
Label2(32) = xlSheet.Cells(34, 4)
Label2(33) = xlSheet.Cells(35, 4)
Label2(34) = xlSheet.Cells(36, 4)
Label2(35) = xlSheet.Cells(37, 4)
Label2(36) = xlSheet.Cells(38, 4)
Label2(37) = xlSheet.Cells(39, 4)
Label2(38) = xlSheet.Cells(40, 4)
Label2(39) = xlSheet.Cells(41, 4)
Label2(40) = xlSheet.Cells(42, 4)
Label2(41) = xlSheet.Cells(43, 4)
Label2(42) = xlSheet.Cells(44, 4)
Label2(43) = xlSheet.Cells(45, 4)
Label2(44) = xlSheet.Cells(46, 4)
Label2(45) = xlSheet.Cells(47, 4)
Label2(46) = xlSheet.Cells(48, 4)
Label2(47) = xlSheet.Cells(49, 4)
Label2(48) = xlSheet.Cells(50, 4)
Label2(49) = xlSheet.Cells(51, 4)
Label2(50) = xlSheet.Cells(52, 4)
Label2(51) = xlSheet.Cells(53, 4)
Label2(52) = xlSheet.Cells(54, 4)
Label2(53) = xlSheet.Cells(55, 4)
Label2(54) = xlSheet.Cells(56, 4)
End Sub

Private Sub Command30_Click()
Label2(26) = Val(Label2(26)) - 1
End Sub

Private Sub Command31_Click()
Label2(27) = Val(Label2(27)) - 1
End Sub

Private Sub Command32_Click()
Label2(28) = Val(Label2(28)) - 1
End Sub

Private Sub Command33_Click()
Label2(29) = Val(Label2(29)) - 1
End Sub

Private Sub Command34_Click()
Label2(30) = Val(Label2(30)) - 1
End Sub

Private Sub Command35_Click()
Label2(31) = Val(Label2(31)) - 1
End Sub

Private Sub Command36_Click()
Label2(32) = Val(Label2(32)) - 1
End Sub

Private Sub Command37_Click()
Label2(33) = Val(Label2(33)) - 1
End Sub

Private Sub Command38_Click()
Label2(34) = Val(Label2(34)) - 1
End Sub

Private Sub Command39_Click()
Label2(35) = Val(Label2(35)) - 1
End Sub

Private Sub Command4_Click()
Label2(0) = Val(Label2(0)) - 1
End Sub

Private Sub Command40_Click()
Label2(36) = Val(Label2(36)) - 1
End Sub

Private Sub Command41_Click()
Label2(37) = Val(Label2(37)) - 1
End Sub

Private Sub Command42_Click()
Label2(38) = Val(Label2(38)) - 1
End Sub

Private Sub Command43_Click()
Label2(39) = Val(Label2(39)) - 1
End Sub

Private Sub Command44_Click()
Label2(40) = Val(Label2(40)) - 1
End Sub

Private Sub Command45_Click()
Label2(41) = Val(Label2(41)) - 1
End Sub

Private Sub Command46_Click()
Label2(42) = Val(Label2(42)) - 1
End Sub

Private Sub Command47_Click()
Label2(43) = Val(Label2(43)) - 1
End Sub

Private Sub Command48_Click()
Label2(44) = Val(Label2(44)) - 1
End Sub

Private Sub Command49_Click()
Label2(45) = Val(Label2(45)) - 1
End Sub

Private Sub Command5_Click()
Label2(1) = Val(Label2(1)) - 1
End Sub

Private Sub Command50_Click()
Label2(46) = Val(Label2(46)) - 1
End Sub

Private Sub Command51_Click()
Label2(47) = Val(Label2(47)) - 1
End Sub

Private Sub Command52_Click()
Label2(48) = Val(Label2(48)) - 1
End Sub

Private Sub Command53_Click()
Label2(49) = Val(Label2(49)) - 1
End Sub

Private Sub Command54_Click()
Label2(50) = Val(Label2(50)) - 1
End Sub

Private Sub Command55_Click()
Label2(51) = Val(Label2(51)) - 1
End Sub

Private Sub Command56_Click()
Label2(52) = Val(Label2(52)) - 1
End Sub

Private Sub Command57_Click()
Label2(53) = Val(Label2(53)) - 1
End Sub

Private Sub Command58_Click()
Label2(54) = Val(Label2(54)) - 1
End Sub

Private Sub Command59_Click()
Label2(0) = Val(Label2(0)) + 1
End Sub

Private Sub Command6_Click()
Label2(2) = Val(Label2(2)) - 1
End Sub

Private Sub Command60_Click()
Label2(1) = Val(Label2(1)) + 1
End Sub

Private Sub Command61_Click()
Label2(2) = Val(Label2(2)) + 1
End Sub

Private Sub Command62_Click()
Label2(3) = Val(Label2(3)) + 1
End Sub

Private Sub Command63_Click()
Label2(4) = Val(Label2(4)) + 1
End Sub

Private Sub Command64_Click()
Label2(5) = Val(Label2(5)) + 1
End Sub

Private Sub Command65_Click()
Label2(6) = Val(Label2(6)) + 1
End Sub

Private Sub Command66_Click()
Label2(7) = Val(Label2(7)) + 1
End Sub

Private Sub Command67_Click()
Label2(8) = Val(Label2(8)) + 1
End Sub

Private Sub Command68_Click()
Label2(9) = Val(Label2(9)) + 1
End Sub

Private Sub Command69_Click()
Label2(10) = Val(Label2(10)) + 1
End Sub

Private Sub Command7_Click()
Label2(3) = Val(Label2(3)) - 1
End Sub

Private Sub Command70_Click()
Label2(11) = Val(Label2(11)) + 1
End Sub

Private Sub Command71_Click()
Label2(12) = Val(Label2(12)) + 1
End Sub

Private Sub Command72_Click()
Label2(13) = Val(Label2(13)) + 1
End Sub

Private Sub Command73_Click()
Label2(14) = Val(Label2(14)) + 1
End Sub

Private Sub Command74_Click()
Label2(15) = Val(Label2(15)) + 1
End Sub

Private Sub Command75_Click()
Label2(16) = Val(Label2(16)) + 1
End Sub

Private Sub Command76_Click()
Label2(17) = Val(Label2(17)) + 1
End Sub

Private Sub Command77_Click()
Label2(18) = Val(Label2(18)) + 1
End Sub

Private Sub Command78_Click()
Label2(19) = Val(Label2(19)) + 1
End Sub

Private Sub Command79_Click()
Label2(20) = Val(Label2(20)) + 1
End Sub

Private Sub Command8_Click()
Label2(4) = Val(Label2(4)) - 1
End Sub

Private Sub Command80_Click()
Label2(21) = Val(Label2(21)) + 1
End Sub

Private Sub Command81_Click()
Label2(22) = Val(Label2(22)) + 1
End Sub

Private Sub Command82_Click()
Label2(23) = Val(Label2(23)) + 1
End Sub

Private Sub Command83_Click()
Label2(24) = Val(Label2(24)) + 1
End Sub

Private Sub Command84_Click()
Label2(25) = Val(Label2(25)) + 1
End Sub

Private Sub Command85_Click()
Label2(26) = Val(Label2(26)) + 1
End Sub

Private Sub Command86_Click()
Label2(27) = Val(Label2(27)) + 1
End Sub

Private Sub Command87_Click()
Label2(28) = Val(Label2(28)) + 1
End Sub

Private Sub Command88_Click()
Label2(29) = Val(Label2(29)) + 1
End Sub

Private Sub Command89_Click()
Label2(30) = Val(Label2(30)) + 1
End Sub

Private Sub Command9_Click()
Label2(5) = Val(Label2(5)) - 1
End Sub

Private Sub Command90_Click()
Label2(31) = Val(Label2(31)) + 1
End Sub

Private Sub Command91_Click()
Label2(32) = Val(Label2(32)) + 1
End Sub

Private Sub Command92_Click()
Label2(33) = Val(Label2(33)) + 1
End Sub

Private Sub Command93_Click()
Label2(34) = Val(Label2(34)) + 1
End Sub

Private Sub Command94_Click()
Label2(35) = Val(Label2(35)) + 1
End Sub

Private Sub Command95_Click()
Label2(36) = Val(Label2(36)) + 1
End Sub

Private Sub Command96_Click()
Label2(37) = Val(Label2(37)) + 1
End Sub

Private Sub Command97_Click()
Label2(38) = Val(Label2(38)) + 1
End Sub

Private Sub Command98_Click()
Label2(39) = Val(Label2(39)) + 1
End Sub

Private Sub Command99_Click()
Label2(40) = Val(Label2(40)) + 1
End Sub

Private Sub Form_Initialize()
Dim error As Integer
If App.PrevInstance = True Then
  error = MsgBox("程序运行中，请勿重复打开！", 48, "Error")
  End
End If
End Sub

Private Sub Form_Load()
Set xlApp = CreateObject("Excel.Application")
Set xlBook = xlApp.Workbooks.Open(App.Path & "\donotmodify.xlsx")
Set xlSheet = xlBook.Worksheets("sheet1")
Label1(0) = xlSheet.Cells(2, 1)
Label1(1) = xlSheet.Cells(3, 1)
Label1(2) = xlSheet.Cells(4, 1)
Label1(3) = xlSheet.Cells(5, 1)
Label1(4) = xlSheet.Cells(6, 1)
Label1(5) = xlSheet.Cells(7, 1)
Label1(6) = xlSheet.Cells(8, 1)
Label1(7) = xlSheet.Cells(9, 1)
Label1(8) = xlSheet.Cells(10, 1)
Label1(9) = xlSheet.Cells(11, 1)
Label1(10) = xlSheet.Cells(12, 1)
Label1(11) = xlSheet.Cells(13, 1)
Label1(12) = xlSheet.Cells(14, 1)
Label1(13) = xlSheet.Cells(15, 1)
Label1(14) = xlSheet.Cells(16, 1)
Label1(15) = xlSheet.Cells(17, 1)
Label1(16) = xlSheet.Cells(18, 1)
Label1(17) = xlSheet.Cells(19, 1)
Label1(18) = xlSheet.Cells(20, 1)
Label1(19) = xlSheet.Cells(21, 1)
Label1(20) = xlSheet.Cells(22, 1)
Label1(21) = xlSheet.Cells(23, 1)
Label1(22) = xlSheet.Cells(24, 1)
Label1(23) = xlSheet.Cells(25, 1)
Label1(24) = xlSheet.Cells(26, 1)
Label1(25) = xlSheet.Cells(27, 1)
Label1(26) = xlSheet.Cells(28, 1)
Label1(27) = xlSheet.Cells(29, 1)
Label1(28) = xlSheet.Cells(30, 1)
Label1(29) = xlSheet.Cells(31, 1)
Label1(30) = xlSheet.Cells(32, 1)
Label1(31) = xlSheet.Cells(33, 1)
Label1(32) = xlSheet.Cells(34, 1)
Label1(33) = xlSheet.Cells(35, 1)
Label1(34) = xlSheet.Cells(36, 1)
Label1(35) = xlSheet.Cells(37, 1)
Label1(36) = xlSheet.Cells(38, 1)
Label1(37) = xlSheet.Cells(39, 1)
Label1(38) = xlSheet.Cells(40, 1)
Label1(39) = xlSheet.Cells(41, 1)
Label1(40) = xlSheet.Cells(42, 1)
Label1(41) = xlSheet.Cells(43, 1)
Label1(42) = xlSheet.Cells(44, 1)
Label1(43) = xlSheet.Cells(45, 1)
Label1(44) = xlSheet.Cells(46, 1)
Label1(45) = xlSheet.Cells(47, 1)
Label1(46) = xlSheet.Cells(48, 1)
Label1(47) = xlSheet.Cells(49, 1)
Label1(48) = xlSheet.Cells(50, 1)
Label1(49) = xlSheet.Cells(51, 1)
Label1(50) = xlSheet.Cells(52, 1)
Label1(51) = xlSheet.Cells(53, 1)
Label1(52) = xlSheet.Cells(54, 1)
Label1(53) = xlSheet.Cells(55, 1)
Label1(54) = xlSheet.Cells(56, 1)
End Sub

Private Sub Form_Terminate()
xlApp.Quit
End Sub
