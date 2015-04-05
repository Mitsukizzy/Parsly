import pycurl, json

url = "https://graph.api.smartthings.com/api/smartapps/endpoints/e21868ad-f068-44d6-b614-09296f9e859c&token=a95594dc-ae55-4f96-a6d7-87e2d2ff7870"
user_pwd = "e21868ad-f068-44d6-b614-09296f9e859c"
c = pycurl.Curl()
c.setopt(pycurl.USERPWD, user_pwd)
c.setopt(pycurl.URL, url)
c.setopt(pycurl.POST, 1)
c.perform()
