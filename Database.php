<?php

class DataForm
{
    private $dbh;

    function __construct()
    {
        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        $host = $config['Database']['host'];
        $name = $config['Database']['name'];
        $user = $config['Database']['user'];
        $pass = $config['Database']['pass'];
        $port = $config['Database']['port'];
        $charset =$config['Database']['charset'];
        $dsn = "mysql:host={$host}; db_name={$name};";
//        $dsn = "mysql:host={$host};port={$port};dbname={$name};charset={$charset};";
        try {
            $this->dbh = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
            echo "Error: {$e->getMessage()}";
        }
    }

    public function addDataIntoDB(
        $id,
        $date,
        $lastname,
        $firstname,
        $email,
        $birthday,
        $gender,
        $civilstatus,
        $streetaddress,
        $postalcode,
        $locality,
        $avsnumber,
        $knowledge0,
        $knowledge1,
        $knowledge2,
        $knowledge3,
        $study,
        $comment
    ) {
        // INSERT DATA into DATABASE
        //create a new connection to DB

        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        try {
            $name = $config['Database']['name'];
            $this->dbh->query("USE $name");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->query('SELECT * FROM form_data'); // connect to form_date table
        } catch (PDOException $e) {
            echo "Error: {$e->getMessage()}";
        }

        try {
            $this->dbh->beginTransaction();
            // form_data;
            $query = 'INSERT INTO form_data(id, local_date,last_name,first_name, email, birth_date,sex, civil_status, street_address,postal_code,locality, avs_number,study,comment_people) values(:id,:date,:lastname,:firstname,:email,:birthday,:gender,:civilstatus,:streetaddress,:postalcode,:locality,:avsnumber,:study,:comment)';
            $sth = $this->dbh->prepare($query);
            $sth->bindValue(':id', $id);
            $sth->bindValue(':date', $date);
            $sth->bindValue(':lastname', $lastname);
            $sth->bindValue(':firstname', $firstname);
            $sth->bindValue(':email', $email);
            $sth->bindValue(':birthday', $birthday);
            $sth->bindValue(':gender', $gender);
            $sth->bindValue(':civilstatus', $civilstatus);
            $sth->bindValue(':streetaddress', $streetaddress);
            $sth->bindValue(':postalcode', $postalcode);
            $sth->bindValue(':locality', $locality);
            $sth->bindValue(':avsnumber', $avsnumber);
            $sth->bindValue(':study', $study);
            $sth->bindValue(':comment', $comment);
            $sth->execute();

            //person_it_knowlege;
            if (empty($knowledge0) == false) {
                $query = 'INSERT INTO person_it_knowledge(person_id,person_it_knowledge) values(:id,:knowledge0)';
                $sth = $this->dbh->prepare($query);
                $sth->bindValue(':id', $id);
                $sth->bindValue(':knowledge0', $knowledge0);
                $sth->execute();
            }

            if (empty($knowledge1) == false) {
                $query = 'INSERT INTO person_it_knowledge(person_id,person_it_knowledge) values(:id,:knowledge1)';
                $sth = $this->dbh->prepare($query);
                $sth->bindValue(':id', $id);
                $sth->bindValue(':knowledge1', $knowledge1);
                $sth->execute();
            }

            if (empty($knowledge2) == false) {
                $query = 'INSERT INTO person_it_knowledge(person_id,person_it_knowledge) values(:id,:knowledge2)';
                $sth = $this->dbh->prepare($query);
                $sth->bindValue(':id', $id);
                $sth->bindValue(':knowledge2', $knowledge2);
                $sth->execute();
            }

            if (empty($knowledge3) == false) {
                $query = 'INSERT INTO person_it_knowledge(person_id,person_it_knowledge) values(:id,:knowledge3)';
                $sth = $this->dbh->prepare($query);
                $sth->bindValue(':id', $id);
                $sth->bindValue(':knowledge3', $knowledge3);
                $sth->execute();
            }
            $this->dbh->commit();
        } catch (PDOException $e) {
            $this->dbh->rollBack(); //cancle all if there is a mistake
            echo "Error:{$e->getMessage()}";
        }
    }

    //retrive information from sex table
    function getSex(){

        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        $name = $config['Database']['name'];
        $this->dbh->query("USE $name");
        $query = 'SELECT * FROM sex';
        $data = $this->dbh->query($query)->fetchAll();

        return $data;
    }

    //retrieve information from civil table
    function getCivilStatus(){
        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        $name = $config['Database']['name'];
        $this->dbh->query("USE $name");
        $query ='SELECT * From etat_civils';
        $data =$this->dbh->query($query)->fetchAll();

        return $data;
    }

    //retrive information from it_knowledge table
    function getItKnowledge(){
        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        $name = $config['Database']['name'];
        $this->dbh->query("USE $name");
        $query = 'SELECT * FROM it_knowledge';
        $data = $this->dbh->query($query)->fetchAll();

        return $data;
    }

    //retrive information from study table
    function getStudy(){
        // config.ini
        $config = parse_ini_file('../../conf/config.ini', true);
//        var_dump($config);
        $name = $config['Database']['name'];
        $this->dbh->query("USE $name");
        $query = 'SELECT * FROM study';
        $data = $this->dbh->query($query)->fetchAll();

        return $data;
    }

    // encoding problem

}

