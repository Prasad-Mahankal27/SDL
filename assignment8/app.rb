# sudo apt-get install ruby-full
# sudo apt-get update -y
# sudo apt-get install -y ruby-sinatra

require 'sinatra'

get '/' do
  erb :index
end

post '/reverse' do
  "#{params[:last_name]} #{params[:first_name]}"
end

# ruby app.rb