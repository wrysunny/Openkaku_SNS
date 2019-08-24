#by:iceCliffs Apache License 2.0
import json,requests
import threading
import urllib.request
from os import *
from socket import *
import uuid
import time
import math
from platform import *
print('''                                                               
 /$$       /$$                 /$$                                  
| $$      |__/                | $$                                  
| $$       /$$ /$$$$$$$   /$$$$$$$  /$$$$$$  /$$  /$$  /$$  /$$$$$$$
| $$      | $$| $$__  $$ /$$__  $$ /$$__  $$| $$ | $$ | $$ /$$_____/
| $$      | $$| $$  \ $$| $$  | $$| $$  \ $$| $$ | $$ | $$|  $$$$$$ 
| $$      | $$| $$  | $$| $$  | $$| $$  | $$| $$ | $$ | $$ \____  $$
| $$$$$$$$| $$| $$  | $$|  $$$$$$$|  $$$$$$/|  $$$$$/$$$$/ /$$$$$$$/
|________/|__/|__/  |__/ \_______/ \______/  \_____/\___/ |_______/ 
            
''',"北京时间："+time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()))
def Calc():
    print('''
            Lindows普通工具
            计算器使用说明
            ==================
            1.输入第一个数
            2.输入运算符(+ - x / %)
            3.再输入一个数
            4.在运算符输入q返回上一级(还需进行一次运算)
            优点：简单粗暴
            缺点：取余有点问题
            ==================
            ''')
    def jiaAdd(first, second):
        return first + second
    def jianSubtract(first, second):
        return first - second
    def ChengMultiply(first, second):
        return first * second
    def ChuDivide(first, second):
        return first / second
    def QuYu(first, second):
        return first % second
    CalcCommand = int(input("1.请输入：>>"))
    Choice = input("2.运算符：>>")
    CalcCommand2 = int(input("3.请输入：>>"))
    if Choice == "+":
        print(CalcCommand,"+", CalcCommand2, "=", jiaAdd(CalcCommand, CalcCommand2))
    elif Choice == "-":
        print(CalcCommand,"-", CalcCommand2, "=", jianSubtract(CalcCommand, CalcCommand2))
    elif Choice == "x":
        print(CalcCommand,"*", CalcCommand2, "=", ChengMultiply(CalcCommand, CalcCommand2))
    elif Choice == "/":
        print(CalcCommand, "/", CalcCommand2, "=", ChuDivide(CalcCommand, CalcCommand2))
    elif Choice == "%":
        print(CalcCommand, "%", CalcCommand2, "=", QuYu(CalcCommand, CalcCommand2))
    else:
        print("输入出错！")
def wwwPing():
    print('''
            Lindows网络工具
            网站存活使用说明
            ==================
            1.直接输入域名 例:www.zhangqixiang.xyz
            2.输入q返回上一级
            优点：能成功识别网站IP
            缺点：只有这个效果而已
            ==================
            ''')
    def GetIP(domain):
        MywwwWeb = getaddrinfo(domain,'http'or'https')
        print("目标网站："+ wwwPing_Command +"的IP是："+MywwwWeb[0][4][0])
    wwwPing_Command = input(">>")
    GetIP(wwwPing_Command)

def No_relax():
    print('''
            Lindows普通工具
            进制转换使用说明
            ==================
            1.输入第一个数(可以是二进制，八进制，十进制，十六进制)
            2.要转换的类型(输入：2,8,16,233)
            优点：能精准的转换
            缺点：暂无
            ''')
    transformation = int(input('1.请输入：>>'))
    print('2.必须是：2,8,16,233>>')
    fortransformation = int(input('3.请输入类型：>>'))
    if fortransformation == 2:
        def MyBin():
            nondebin = bin(transformation)
            print('数字：'+'%d转换之后：' % (transformation), nondebin)

        MyBin()
    elif fortransformation == 8:
        def MyOct():
            nondeoct = oct(transformation)
            print('数字：'+'%d转换之后：' % (transformation), nondeoct)

        MyOct()
    elif fortransformation == 16:
        def MyHex():
            nondeHex = hex(transformation)
            print('数字：'+'%d转换之后：' % (transformation), nondeHex)

        MyHex()
    elif fortransformation == 233:
        popen('calc')
        print('蜜汁彩蛋，打开计算器成功！')
    else:
        print('输入错误！')
def diePing():
    print('''
            Lindows攻击工具
            局域网攻击使用说明
            ==================
            1.直接在>>输入IP或者域名
            优点：能利用icmp协议进行洪水攻击
            缺点：停不下来
            ==================
            ''')
    die_ip_command = input('>>')
    IP_LIST = list()
    BackInfo = os.system('ping -t -l 65500 %s' % (die_ip_command))
    print("攻击成功：",BackInfo,"开始攻击！")
    if BackInfo:
        print("no")
    else:
        IP_LIST.append(die_ip_command)
        print(IP_LIST)
def WsourceWeb():
    print('''
            Lindows爬虫工具
            获取网页源码使用说明
            ==================
            1.直接在>>输入[协议]+[域名]
            警告：
            没输入协议名会报错
            常见的协议https+http
            ==================
            例子：
            https://www.zhangqixiang.xyz
            优点：详细的显示出了网站请求头
            缺点：占用网络带宽
            ==================
            ''')
    WebLoadSource = input(">>")
    LoadWeb = urllib.request.urlopen(WebLoadSource)
    LoadWebOnFacthions = LoadWeb.read()
    LoadWebOnFacthions = LoadWebOnFacthions.decode("utf-8")
    print(LoadWebOnFacthions)
    print('=============================')
    print('获取成功！'+'0x225022b518')
    print("网站地址+网站信息↓")
    print(LoadWeb.info())
    print(LoadWeb.geturl())
def ChatServerStart():
    print('''
            Lindows网络工具
            聊天系统使用说明(服务器)
            ==================
            使用本系统必须打开配套的client.exe程序
            这样才能进行双方通信，本工具在局域网内测
            试非常成功。
            ==================
            使用说明：
            1.必须先配置服务器IP(地址)
            2.然后设置服务器端口(建议在10000以上)
            3.配置成功后返回>>>即可开始通信
            优点：利用tcp协议通信
            缺点：没有任何加密措施数据可能被窃听
            ==================
        ''')
    print('服务器启动成功！...请配置连接')
    Server_IP_Select = input("1.请配置IP>>")
    Server_Port_Select = int(input("2.请配置端口>>"))
    All_connection = (Server_IP_Select,Server_Port_Select)
    print("配置成功：")
    print("服务器地址：%s 端口： %s" %(Server_IP_Select,Server_Port_Select))
    SoIO = socket(AF_INET,SOCK_STREAM)
    SoIO.bind(All_connection)
    SoIO.listen(1)
    ServerConn,ServerAdd = SoIO.accept()
    true=True
    ServerAdd = str(ServerAdd)
    print("连接成功！对象：%s"%(ServerAdd))
    def Server_Receve(ServerConn):
        global true
        while True:
            data = ServerConn.recv(1024).decode('utf8')
            if data == 'q':
                true = False
            print("客户端："+data+ServerAdd)
    ServerThrd = threading.Thread(target=Server_Receve,args=(ServerConn,))
    ServerThrd.start()
    while True:
        Server_User_input = input(">>>")
        ServerConn.send(Server_User_input.encode('utf8'))
        if Server_User_input == 'q':
            true = False
        SoIO.close()
def Night_Conn():
    print("打印成功！(正)")
    for i in range(1, 10):
        for j in range(1, i + 1):
            print(str(j) + "x" + str(i) + "=" + str(i * j) + "\t", end="")
        print('')
    print('结束')
def ai():
    print('''
            Lindows网络工具
            人工智能AI对话
            ==================
            采用机器学习等等
            ==================
            使用说明：
            直接开始使用就对啦！
            这机器人很聪明的哦！
            优点：24小时全天聊天
            缺点：过于机械
            ==================
            ''')
    print('调用成功！可以进行对话！')
    api_url = "http://openapi.tuling123.com/openapi/api/v2"
    while 1:
        text_input = input('>>')
        data = {
            "perception":
                {"inputText":
                     {"text": text_input
                      },
                 },
            "userInfo":
                {"apiKey": "",
                 "userId": "AA"
                 }
        }
        data = json.dumps(data).encode('utf8')
        response_str = requests.post(api_url, data=data, headers={'content-type': 'application/json'})
        response_dic = response_str.json()
        results_text = response_dic['results'][0]['values']['text']
        print('小Lin：' + results_text)
def MyRobotIceCliffs():
    print('''
            Lindows网络工具
            机器人对话
            ==================
            采用机器学习等等
            ==================
            使用说明：
            直接开始使用就对啦！
            这机器人很聪明的哦！
            优点：24小时全天聊天
            缺点：过于机械
            ==================
            ''')
    print('调用成功！可以进行对话！')
    api_url = "http://openapi.tuling123.com/openapi/api/v2"
    while 1:
        text_input = input('>>')
        data = {
            "perception":
                {"inputText":
                     {"text": text_input
                      },
                 },
            "userInfo":
                {"apiKey": "",
                 "userId": "AA"
                 }
        }
        data = json.dumps(data).encode('utf8')
        response_str = requests.post(api_url, data=data, headers={'content-type': 'application/json'})
        response_dic = response_str.json()
        results_text = response_dic['results'][0]['values']['text']
        print('Lindows：' + results_text)

def LoginBack():
    print('''
            Lindows后台登入
            ==================
            默认密码：root
    ''')
    Password = input('请输入密码：>>')
    def LoginSuccessful():
        print('登入成功，欢迎使用Lindows后台！')
        print('输入help查看后台管理功能')
        while True:
            LoginSuccessfulInterface = input('root@lindows>>>')
            if LoginSuccessfulInterface == "help":
                print('''
                功能：
                create 创建普通txt文件
                mkdir 创建文件夹
                path 查看当前程序路径
                ls 查看当前目录文件
                cd 切换目录
                su 进入开发者模式
                exit 退出终端
                ''')
            elif LoginSuccessfulInterface == "create":
                CreateFile = str(input('请输入文件名>>>'))
                print('系统提示-创建文件失败，请检查权限')
            elif LoginSuccessfulInterface == "remove":
                RemoveFile = input("请输入要删除的文件>>>")
                print('系统提示-删除文件失败，请检查权限')
            elif LoginSuccessfulInterface == "path":
                NewFile = os.getcwd()
                print(NewFile)
            elif LoginSuccessfulInterface == "mkdir":
                MkdirFIle = input("请输入文件夹名>>>")
                MkdirFIleName = os.mkdir(MkdirFIle)
                print('系统提示-创建文件夹'+MkdirFIle+'成功！')
            elif LoginSuccessfulInterface == "cd":
                ChangePath = input("请输入路径：")
                ChangePathName = os.chdir(ChangePath)
                print('系统提示-切换成功！当前路径'+ChangePath)
            elif LoginSuccessfulInterface == "ls":
                LsPath = os.listdir()
                print(LsPath)
            elif LoginSuccessfulInterface == "su":
                breakpoint()
            elif LoginSuccessfulInterface == "exit":
                break
            else:
                print("系统提示-请检查输入！命令不存在")
    if Password == "root":
        LoginSuccessful()
    else:
        print('密码输入错误！程序自动退出！')
        Login_command
def MyBug():
    print("程序识别代码，唯一识别码")
    # BUG = random.choice('abcdefghijklmnopqrstuvwxyz!@#$%^&*()')
    list = uuid.uuid1()
    print(list)

while True:
    Login_command = input(">")
    if Login_command == '/help':
        print('''
        普通工具：
        ==================
        1.输入calc打开计算器
        2.输入relax打开进制转换
        ==================
        网络工具：
        ==================
        1.输入wwwping查询网站IP
        2.输入server启动聊天服务器
        3.输入wsource获取网站首页源码
        4.输入dieping进行局域网攻击
        5.输入ai进行人工智能对话
        6.输入robot进行机器人对话
        ==================
        学习工具：
        ==================
        1.输入99打开九九乘法表
        ==================
        login 后台管理
        exit 退出程序
        ''')
    # elif Login_command == "releax":
    #     ReLexFunction()
    elif Login_command == "bug":
        MyBug()
    elif Login_command == "login":
        LoginBack()
    elif Login_command == "calc":
        Calc()
    elif Login_command == "wwwping":
        wwwPing()
    elif Login_command == "relax":
        No_relax()
    elif Login_command == "dieping":
        diePing()
    elif Login_command == "wsource":
        WsourceWeb()
    elif Login_command == "server":
        ChatServerStart()
    elif Login_command == "99":
        Night_Conn()
    elif Login_command == "ai":
        ai()
    elif Login_command == "robot":
        MyRobotIceCliffs()
    elif Login_command == "exit":
        break
    else:
        print("北京时间："+time.strftime("%H:%M:%S", time.localtime()),"输入错误！")
