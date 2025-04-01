require 'mail'

# Configure the email options (Gmail SMTP settings)
Mail.defaults do
  delivery_method :smtp, {
    address: 'smtp.gmail.com',
    port: 587,
    user_name: 'prasad.mahankal27@gmail.com',  # Replace with your Gmail address
    password: 'moaa riva gzhv idoo',          # Replace with your Gmail app password
    authentication: 'plain',
    enable_starttls_auto: true
  }
end

# Compose the email
mail = Mail.new do
  from    'prasad.mahankal27@gmail.com'    # Replace with your email
  to      'prasad.mahankal22@pccoepune.org'  # Replace with recipient's email
  subject 'Test Email from Ruby Script'
  body    'This is a test email sent from a Ruby script!'
end

# Send the email
begin
  mail.deliver!
  puts "Email sent successfully!"
rescue => e
  puts "Error sending email: #{e.message}"
end