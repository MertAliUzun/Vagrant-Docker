sudo apt-get purge -y podman          #removes podman
sudo apt-get autoremove -y            #removes unused packages after podman is removed
sudo rm -rf /etc/containers/* /var/lib/containers/* /etc/docker /etc/subuid* /etc/subgid*      #removes leftover files   
sudo rm -rf /.local/share/containers/                                                          #removes container storage