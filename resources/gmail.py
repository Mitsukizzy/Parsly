import smtplib
import sys

if len(sys.argv) > 1:
  content = str(sys.argv[1])
  # The below code never changes, though obviously those variables need values.
  session = smtplib.SMTP('smtp.gmail.com', 587)
  session.ehlo()
  session.starttls()
  session.login('garlnd106@gmail.com', "#yoloswag")

  # body_of_email can be plaintext or html!                    
  session.sendmail("garlnd106@gmail.com", "4017827413@tmomail.net", content)
else:
  print('no message to send')
