sudo apt-get update                            #update your system
sudo apt install -y docker.io                  #install docker
sudo chmod 666 /var/run/docker.sock            #gives permission to docker daemon socket
docker --version                               #checks version