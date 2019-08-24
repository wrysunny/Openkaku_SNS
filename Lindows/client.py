#by:iceCliffs Apache License 2.0
from socket import *
from threading import *
print('''
 __        __                  __                                   
/  |      /  |                /  |                                  
$$ |      $$/  _______    ____$$ |  ______   __   __   __   _______ 
$$ |      /  |/       \  /    $$ | /      \ /  | /  | /  | /       |
$$ |      $$ |$$$$$$$  |/$$$$$$$ |/$$$$$$  |$$ | $$ | $$ |/$$$$$$$/ 
$$ |      $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ | $$ | $$ |$$      \ 
$$ |_____ $$ |$$ |  $$ |$$ \__$$ |$$ \__$$ |$$ \_$$ \_$$ | $$$$$$  |
$$       |$$ |$$ |  $$ |$$    $$ |$$    $$/ $$   $$   $$/ /     $$/ 
$$$$$$$$/ $$/ $$/   $$/  $$$$$$$/  $$$$$$/   $$$$$/$$$$/  $$$$$$$/  
''')
print('''

        Lindows网络工具
        聊天系统使用说明(客户端)
        ==================
        使用本系统必须打开配套的main.exe程序
        这样才能进行双方通信，本工具在局域网内测
        试非常成功。
        ==================
        使用说明：
        必须先配置服务器IP(地址)
        然后设置服务器端口(建议在10000以上)
        配置成功后返回>>>即可开始通信
        ''')
Server_IP_Client = input("1.请输入服务器地址：>>")
Server_PORT_Client = int(input("2.请输入服务器端口：>>"))
All_Connection_Of_Server_And_Client = (Server_IP_Client,Server_PORT_Client)
ServerConn = socket(AF_INET,SOCK_STREAM)
ServerConn.connect(All_Connection_Of_Server_And_Client)
true = True
def Server_Receve(ServerConn):
    global true
    while true:
        Client_data = ServerConn.recv(1024).decode('utf8')
        if Client_data == 'q':
            true = False
        print("服务器：%s 延迟：46m"%(Client_data))
Thr4eaasd1203UJoiqwne12 = Thread(target=Server_Receve,args=(ServerConn,))
Thr4eaasd1203UJoiqwne12.start()
while True:
    Client_INput_inPUT_0923IOjdas = input(">>>")
    ServerConn.send(Client_INput_inPUT_0923IOjdas.encode('utf8'))
    if Client_INput_inPUT_0923IOjdas == 'q':
        true = False
        ServerConn.close()
