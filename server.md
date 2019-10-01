server{

    server_name   algorithm.local;
    
    root          /home/mrktinh/Projects/algorithm;
    
    # Add index.php to the list if you are using PHP
    index index.php index.html index.htm index.nginx-debian.html;
    
    location / {
             autoindex on;
    }

    location ~ \.php$ {
       include snippets/fastcgi-php.conf;
       fastcgi_pass unix:/run/php/php7.2-fpm.sock;
    }


   location ~ /\.ht {
      deny all;
    }

}
