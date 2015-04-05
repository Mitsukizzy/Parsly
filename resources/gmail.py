import smtplib
import sys

if len(sys.argv) > 1:
  content = str(sys.argv[1])
  # The below code never changes, though obviously those variables need values.
  session = smtplib.SMTP('smtp.gmail.com', 587)
  session.ehlo()
  session.starttls()
  session.login('garlnd106@gmail.com', "#yoloswag")
  headers = "\r\n".join(["from: " + GMAIL_USERNAME,
                       "subject: " + email_subject,
                       "to: " + recipient,
                       "mime-version: 1.0",
                       "content-type: text/html"])

  # body_of_email can be plaintext or html!                    
  headers = "\r\n\r\n" + content
  # body_of_email can be plaintext or html!                    
  session.sendmail("garlnd106@gmail.com", "4017827413@tmomail.net", headers)
else:
  print('no message to send')
