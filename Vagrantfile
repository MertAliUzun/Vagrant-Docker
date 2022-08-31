# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "hashicorp/bionic64"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.






  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  #config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end


  # MULTI MACHINE CONFIG
  # config.vm.box_check_update = false
  #config.vm.define "t1" do |t1|
  #  t1.vm.box = "laravel/homestead"
  #end  
  #config.vm.define "t2" do |t2|
  #  t2.vm.box = "ubuntu/trusty64"
  #end  
  #config.vm.define "t3" do |t3|
  #  t3.vm.box = "kalilinux/rolling"
  #end  




   config.ssh.username = 'vagrant'                                                                      #configs ssh username

   config.ssh.password = 'vagrant'                                                                      #configs ssh password

   config.ssh.insert_key = false                                                                        #configs ssh authentication

   config.vm.network "private_network", ip: "192.168.10.101"                                            #provides ip for host-only access

   config.vm.network "forwarded_port", guest: 8080, host: 8000                                          #syncs ports 8080 between guest and host

   config.vm.network "forwarded_port", guest: 3306, host: 3000                                          #syncs ports 3306 between guest and host

   config.vm.synced_folder "./sync", "/home/vagrant"                                                    #syncs folders between guest and host



   config.vm.provision "docker", type: "shell", run: "never", path: "./scripts/docker.sh"                                       #install docker

   config.vm.provision "compose", type: "shell", run: "never", path: "./scripts/compose.sh"                                     #install docker-compose

   config.vm.provision "podman", type: "shell", run: "never", path: "./scripts/podman.sh"                                       #install podman

   config.vm.provision "podman-compose", type: "shell", run: "never", path: "./scripts/podman-compose.sh"                       #makes docker-compose and podman compatible

   config.vm.provision "rm_podman", type: "shell", run: "never", path: "./scripts/rm_podman.sh"                                 #remove podman

   config.vm.provision "rm_docker", type: "shell", run: "never", path: "./scripts/rm_docker.sh"                                 #remove docker

   config.vm.provision "rmforced_docker", type: "shell", run: "never", path: "./scripts/rmforced_docker.sh"                     #force remove docker

   config.vm.provision "rm_compose", type: "shell", run: "never", path: "./scripts/rm_compose.sh"                               #remove docker-compose

end
