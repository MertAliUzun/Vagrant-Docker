# This one also deletes all images, containers, volumes unlike the other one.

dpkg -l | grep -i docker
sudo apt-get purge -y docker-engine docker docker.io docker-ce docker-ce-cli          #removes docker
sudo apt-get autoremove -y --purge docker-engine docker docker.io docker-ce           #removes unused packages after docker is removed


#code below removes all images, containers and volumes related to docker
sudo rm -rf /var/lib/docker /etc/docker
sudo rm /etc/apparmor.d/docker
sudo groupdel docker
sudo rm -rf /var/run/docker.sock