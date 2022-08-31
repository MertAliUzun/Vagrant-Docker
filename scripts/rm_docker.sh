dpkg -l | grep -i docker
sudo apt-get purge -y docker-engine docker docker.io docker-ce docker-ce-cli          #removes docker
sudo apt-get autoremove -y --purge docker-engine docker docker.io docker-ce           #removes unused packages after docker is removed