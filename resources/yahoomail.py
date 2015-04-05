import smtplib
fromaddr = 'parslyrocks@yahoo.com'
toaddrs  = '4017827413@tmomail.net'
msg = 'Why,Oh why!'
username = 'parslyrocks@yahoo.com'
password = 'fightontrojans'
server = smtplib.SMTP("smtp.mail.yahoo.com",587)
server.ehlo()
server.starttls()
server.login(username,password)
server.sendmail(fromaddr, toaddrs, msg)
server.quit()
