# dpu_ct519_Lab4
วิธีใช้งาน  
  sudo git clone https://github.com/tamamaxx/dpu_ct519_Lab4.git
  cd dpu_ct519_Lab4  
  sudo docker-compose up -d  
  sudo docker exec -i db sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD"' < mysql-backup/my_data_645162010003.sql  
เข้า browser พิมพ์ ip ของเครื่อง vm
