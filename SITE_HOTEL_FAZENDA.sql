create schema Site_Hotel_Fazenda;
use Site_Hotel_Fazenda;
create table Reserva(
	codigo int primary key auto_increment,
	email varchar(45) primary key,
	nome varchar(45) not null,
    telefone varchar (12),
    data_e_horario_entrada datetime not null,
    data_e_horario_saida datetime not null,
    quantidade_de_adultos char(2),
    quantidade_de_criancas char(2)
    );
    
    create table Depoimento(
    codigo_depoimento_cliente int primary key auto_increment,
	nome varchar(45) not null,
    comentario varchar (100) not null,
    foto varchar (90),
    email_reserva varchar(45) not null,
    foreign key (codigo_depoimento_cliente) references Reserva(codigo)
    );
    
    #alter table Depoimento add feedback varchar(100)not null;
	#alter table Depoimento drop column comentario;
    #drop table Depoimento;
    alter table Depoimento modify column comentario varchar (300) not null;
    
    show tables;
    
    select * from Reserva;
    select * from Depoimento;
    
    show columns from Reserva;
    show columns from Depoimento;
 
 insert into Reserva (email, nome, telefone, data_e_horario_entrada, data_e_horario_saida, quantidade_de_adultos, quantidade_de_criancas)
    values ("souza.gleds@gmail.com", "Gledson Souza", "035988886666", "2021-12-02 16:00:00", "2021-12-04 16:00:00", "2","0");
    
insert into Reserva (email, nome, telefone, data_e_horario_entrada, data_e_horario_saida, quantidade_de_adultos, quantidade_de_criancas)
    values ("carlos.eduardo@gmail.com", "Carlos Eduardo", "035988994455", "2021-12-01 13:30:00", "2021-12-03 12:50:00", "2","1");
    
 insert into Depoimento ( nome, comentario, foto, email_reserva)
    values ("Carlos Eduardo", "Adorei a hospedagem, pessoas muito atenciosas. Adorei as indicações de passeio e a vista do meu quarto para a Pedra de São Domingos",
    "carlos.jpg","carlos.eduardo@gmail.com");
    
    
    SELECT * FROM Depoimento WHERE codigo = 1;
    
    
    
    
    