sudo docker stop hiq_php_app && docker rm hiq_php_app

docker run -d -v /home/vinit/holidayiqCodes/php_projects:/home -v /var/log/apache:/var/log/apache2 -v /home/vinit/holidayiqCodes/hosts/development:/home/hosts_file/ -p 80:80 --name hiq_php_app --oom-kill-disable=false internal.holidayiqadmin.com:5051/hiq/app/php_app_dev_vinit:v1 sh /usr/bin/startup.sh


