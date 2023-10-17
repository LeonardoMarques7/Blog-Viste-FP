CREATE DATABASE Blog;
USE Blog;

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `codigo` int(30) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `assuntoIntro` varchar(1000) DEFAULT NULL,
  `assuntoCompleto` varchar(1000) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `datePost` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `post` (`id`, `codigo`, `foto`, `titulo`, `assuntoIntro`, `assuntoCompleto`, `autor`, `datePost`) VALUES
(1, 12345, 'f1.png', 'Etecs recebem inscrições para processo seletivo do primeiro semestre de 2024', 'As Etecs (Escolas Técnicas Estaduais) abriram as inscrições para o processo seletivo do primeiro semestre de 2024. As inscrições vão até 8 de novembro e devem ser feitas pelo site <strong><a href=\"https://www.vestibulinhoetec.com.br/home/\">Vestibulinho</a></strong>. O valor da taxa de inscrição é de R$ 34. Já o exame será aplicado em 10 de dezembro.\r\n\r\n', '', 'Leonardo Marques', '2023-10-09 07:53:00'),
(2, 222222, 'f2.png', 'Obra da construção FINALIZADA da nova cozinha do Fernando Prestes', 'Obra da construção da <strong>nova cozinha</strong> foi entregada, já começou a ser distribuída a merenda desde 20 setembro, essa obra foi feita em torno de 3 meses. <strong> As vantagens dessa nova cozinha</strong>, é que a distribuição da merenda é mais rápida e pratica, com os próprios alunos pegando sua comida e duas filas separadas. Isso não era possível na outra cozinha por seu espaço pequeno.', '', 'Gabriel Annuciato', '2023-11-11 08:04:00'),
(3, 33333, 'f3.png', 'Começaram as provas esportivas da XXIV Gincana da Amizade do FP', 'Times da <strong>Etec Fernando Prestes (FP)</strong>, se unem para vencer provas em esportes(vôlei, futsal, tênis de mesa..). Cada equipe é formada pelos 3 anos de curso, por exemplo: (1°, 2°, 3° ano) de Desenvolvimento de Sistemas.\r\nE assim são formadas as equipes com essa mistura. Além disso com as participações e pódios, essas equipes arrecadam pontos, que vão sendo acumulados para no final do ano termos o OSCAR, neste evento a equipe que conseguir mais pontos ganha o troféu da gincana da amizade.', '', 'Manoela Moraes', '2023-10-11 07:24:00'),
(4, 44444, 'f4.png', 'Alunos de Etec Fernando Prestes arrecadam leite para doação', 'Os alunos da Escola Técnica Estadual (Etec) Fernando Prestes arrecadaram mais de <strong>18 mil litros de leite para doação</strong>. A coleta do alimento foi feita durante ação do projeto Gincana da Amizade, realizado há mais de 20 edições na instituição. O leite arrecadado foi doado para 13 associações sociais: Banco de Alimentos de Sorocaba, Lar Criança Feliz, Instituto Maria Claro, Gpaci, Lar São Vicente de Paula, Afissore, Anjos do Bem, Casa Áurea, Apae, Comunidade Há Uma Esperança, Amigos da Etec, Comunidade Amigos e Salesiano Sorocaba.', '', 'Leonardo Marques', '2023-04-18 09:14:00'),
(5, 55555, 'f5.png', 'Escola Técnica Fernando Prestes recebem novas unidades de notebooks', 'A <strong>Escola Técnica Fernando Prestes</strong> acaba de introduzir uma emocionante atualização em sua infraestrutura educacional, com a incorporação de novos notebooks de última geração. Essa iniciativa tem como <strong>objetivo</strong> proporcionar aos alunos um ambiente de aprendizado mais <strong>dinâmico</strong> e <strong>tecnologicamente avançado</strong>, preparando-os para os desafios do mundo digital. ','', 'Manoela Moraes', '2023-10-16 15:52:00');

CREATE TABLE `users` (
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`login`, `senha`, `nome`) VALUES
('leo@gmail.com', '1608', 'Leonardo Marques'),
('dan@gmail.com', '7528', 'Daniel Moreira');
