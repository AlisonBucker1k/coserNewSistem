-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2021 às 21:00
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_gerar_demissao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '0',
  `email` varchar(150) NOT NULL DEFAULT '0',
  `pass` varchar(32) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `active`) VALUES
(1, 'Alison Vitor Bucker', 'originalalison@gmail.com', '1c181a54293224de0cff27543782dc75', 1),
(2, 'Fran', 'secretaria.saai@acu.education', '837198dec9497247f029e4bf75c6bc31', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_company`
--

CREATE TABLE `admin_company` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL DEFAULT 0,
  `id_company` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin_company`
--

INSERT INTO `admin_company` (`id`, `id_admin`, `id_company`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `aluno_nome` varchar(200) NOT NULL DEFAULT '0',
  `aluno_nome_social` varchar(200) NOT NULL DEFAULT '0',
  `aluno_sexo` varchar(20) NOT NULL DEFAULT '0',
  `aluno_nascimento` varchar(20) NOT NULL DEFAULT '0',
  `aluno_estado_civil` varchar(20) NOT NULL DEFAULT '0',
  `aluno_profissao` varchar(20) NOT NULL DEFAULT '0',
  `aluno_raca` varchar(20) NOT NULL DEFAULT '0',
  `aluno_naturalidade` varchar(20) NOT NULL DEFAULT '0',
  `aluno_uf` varchar(5) NOT NULL DEFAULT '0',
  `aluno_nacionalidade` varchar(20) NOT NULL DEFAULT '0',
  `aluno_email` varchar(20) NOT NULL DEFAULT '0',
  `aluno_empresa` varchar(150) NOT NULL DEFAULT '0',
  `aluno_cargo` varchar(150) NOT NULL DEFAULT '0',
  `aluno_cpf` varchar(21) NOT NULL DEFAULT '0',
  `aluno_rg` varchar(21) NOT NULL DEFAULT '0',
  `aluno_rg_orgao_exp` varchar(21) NOT NULL DEFAULT '0',
  `aluno_rg_data_exp` varchar(21) NOT NULL DEFAULT '0',
  `aluno_rg_uf` varchar(21) NOT NULL DEFAULT '0',
  `aluno_certidao` varchar(3) NOT NULL DEFAULT '0',
  `aluno_certidao_num` varchar(30) NOT NULL DEFAULT '0',
  `aluno_certidao_cartorio` varchar(30) NOT NULL DEFAULT '0',
  `aluno_certidao_livro` varchar(30) NOT NULL DEFAULT '0',
  `aluno_certidao_folha` varchar(30) NOT NULL DEFAULT '0',
  `aluno_certidao_cidade` varchar(30) NOT NULL DEFAULT '0',
  `aluno_certidao_uf` varchar(30) NOT NULL DEFAULT '0',
  `aluno_tit_eleit` varchar(30) NOT NULL DEFAULT '0',
  `aluno_tit_eleit_zona` varchar(30) NOT NULL DEFAULT '0',
  `aluno_tit_eleit_secao` varchar(30) NOT NULL DEFAULT '0',
  `aluno_tit_eleit_uf` varchar(5) NOT NULL DEFAULT '0',
  `aluno_cert_reserv` varchar(3) NOT NULL DEFAULT '0',
  `aluno_cert_reserv_numero` varchar(21) NOT NULL DEFAULT '0',
  `aluno_cert_reserv_categ` varchar(21) NOT NULL DEFAULT '0',
  `aluno_cert_reserv_reg` varchar(21) NOT NULL DEFAULT '0',
  `aluno_cert_reserv_uf` varchar(5) NOT NULL DEFAULT '0',
  `aluno_cep` varchar(10) NOT NULL DEFAULT '0',
  `aluno_rua` varchar(10) NOT NULL DEFAULT '0',
  `aluno_numero` varchar(10) NOT NULL DEFAULT '0',
  `aluno_complemento` varchar(100) NOT NULL DEFAULT '0',
  `aluno_bairro` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cidade` varchar(100) NOT NULL DEFAULT '0',
  `aluno_end_uf` varchar(100) NOT NULL DEFAULT '0',
  `aluno_end_corresp` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_cep` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_rua` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_numero` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_complemento` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_bairro` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_cidade` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_uf` varchar(100) NOT NULL DEFAULT '0',
  `aluno_cobr_corresp` varchar(100) NOT NULL DEFAULT '0',
  `aluno_tel_1` varchar(20) NOT NULL DEFAULT '0',
  `aluno_tel_1_obs` varchar(200) NOT NULL DEFAULT '0',
  `aluno_tel_2_cobr` varchar(200) NOT NULL DEFAULT '0',
  `aluno_tel_1_cobr` varchar(3) NOT NULL DEFAULT '0',
  `aluno_tel_1_sms` varchar(3) NOT NULL DEFAULT '0',
  `aluno_tel_2` varchar(20) NOT NULL DEFAULT '0',
  `aluno_tel_2_obs` varchar(200) NOT NULL DEFAULT '0',
  `aluno_tel_2_cob` varchar(3) NOT NULL DEFAULT '0',
  `aluno_tel_2_sms` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_auditiva` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_mental` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_baixa_visao` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_visual` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_surdo_cego` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_multiplas` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_sindrom_asperger` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_autism_class` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_sind_rett` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_tdi` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_psic_infant` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_altas_hab` varchar(3) NOT NULL DEFAULT '0',
  `aluno_def_outras` text NOT NULL DEFAULT '0',
  `aluno_def_laudo` varchar(3) NOT NULL DEFAULT '0',
  `pai_nome` varchar(200) NOT NULL DEFAULT '0',
  `pai_nascimento` varchar(20) NOT NULL DEFAULT '0',
  `pai_estado_civil` varchar(20) NOT NULL DEFAULT '0',
  `pai_cpf` varchar(20) NOT NULL DEFAULT '0',
  `pai_rg` varchar(20) NOT NULL DEFAULT '0',
  `pai_email` varchar(20) NOT NULL DEFAULT '0',
  `pai_empresa` varchar(20) NOT NULL DEFAULT '0',
  `pai_cargo` varchar(20) NOT NULL DEFAULT '0',
  `pai_tel_1` varchar(20) NOT NULL DEFAULT '0',
  `pai_tel_1_obs` varchar(200) NOT NULL DEFAULT '0',
  `pai_tel_2` varchar(20) NOT NULL DEFAULT '0',
  `pai_tel_2_obs` varchar(200) NOT NULL DEFAULT '0',
  `pai_cep` varchar(20) NOT NULL DEFAULT '0',
  `pai_rua` varchar(200) NOT NULL DEFAULT '0',
  `pai_num` varchar(8) NOT NULL DEFAULT '0',
  `pai_complemento` varchar(200) NOT NULL DEFAULT '0',
  `pai_cidade` varchar(50) NOT NULL DEFAULT '0',
  `pai_uf` varchar(5) NOT NULL DEFAULT '0',
  `pai_end_corresp` varchar(5) NOT NULL DEFAULT '0',
  `mae_nome` varchar(200) NOT NULL DEFAULT '0',
  `mae_nascimento` varchar(20) NOT NULL DEFAULT '0',
  `mae_estado_civil` varchar(20) NOT NULL DEFAULT '0',
  `mae_profissao` varchar(20) NOT NULL DEFAULT '0',
  `mae_cpf` varchar(20) NOT NULL DEFAULT '0',
  `mae_rg` varchar(20) NOT NULL DEFAULT '0',
  `mae_email` varchar(150) NOT NULL DEFAULT '0',
  `mae_empresa` varchar(150) NOT NULL DEFAULT '0',
  `mae_cargo` varchar(150) NOT NULL DEFAULT '0',
  `mae_tel_1` varchar(20) NOT NULL DEFAULT '0',
  `mae_tel_1_obs` varchar(3) NOT NULL DEFAULT '0',
  `mae_tel_1_cob` varchar(3) NOT NULL DEFAULT '0',
  `mae_tel_1_sms` varchar(3) NOT NULL DEFAULT '0',
  `mae_tel_2` varchar(20) NOT NULL DEFAULT '0',
  `mae_tel_2_obs` varchar(150) NOT NULL DEFAULT '0',
  `mae_tel_2_cob` varchar(3) NOT NULL DEFAULT '0',
  `mae_tel_2_sms` varchar(3) NOT NULL DEFAULT '0',
  `mae_cep` varchar(20) NOT NULL DEFAULT '0',
  `mae_rua` varchar(150) NOT NULL DEFAULT '0',
  `mae_numero` varchar(8) NOT NULL DEFAULT '0',
  `mae_complemento` varchar(150) NOT NULL DEFAULT '0',
  `mae_bairro` varchar(80) NOT NULL DEFAULT '0',
  `mae_cidade` varchar(80) NOT NULL DEFAULT '0',
  `mae_uf` varchar(80) NOT NULL DEFAULT '0',
  `mae_end_corresp` varchar(3) NOT NULL DEFAULT '0',
  `resp_financ` varchar(10) NOT NULL DEFAULT '0',
  `resp_academ` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '0',
  `cnpj` varchar(200) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`, `cnpj`, `active`) VALUES
(1, 'ACU - ABSOULUTE CHRISTIAN UNIVERSITY USA', '08.177.816/0001-05', 1),
(2, 'FACULDADE NOSSA SENHORA DE FÁTIMA', '', 1),
(3, 'Alison Bucker', '28.336.045/0001-50', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenadores`
--

CREATE TABLE `coordenadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL DEFAULT '0',
  `nascimento` varchar(50) NOT NULL DEFAULT '0',
  `estado_civil` varchar(50) NOT NULL DEFAULT '0',
  `profissao` varchar(50) NOT NULL DEFAULT '0',
  `sexo` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `rg` varchar(50) NOT NULL DEFAULT '0',
  `rg_orgao_expeditor` varchar(50) NOT NULL DEFAULT '0',
  `rg_uf` varchar(5) NOT NULL DEFAULT '0',
  `rg_data` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(200) NOT NULL DEFAULT '0',
  `contato_empresa` varchar(200) NOT NULL DEFAULT '0',
  `funcao_empresa` varchar(200) NOT NULL DEFAULT '0',
  `certidao` varchar(3) NOT NULL DEFAULT '0',
  `certidao_numero` varchar(20) NOT NULL DEFAULT '0',
  `certidao_cartorio` varchar(200) NOT NULL DEFAULT '0',
  `certidao_livro` varchar(200) NOT NULL DEFAULT '0',
  `certidao_folha` varchar(200) NOT NULL DEFAULT '0',
  `certidao_cidade` varchar(200) NOT NULL DEFAULT '0',
  `certidao_uf` varchar(5) NOT NULL DEFAULT '0',
  `tit_eleitor` varchar(50) NOT NULL DEFAULT '0',
  `tit_eleitor_zona` varchar(50) NOT NULL DEFAULT '0',
  `tit_eleitor_secao` varchar(50) NOT NULL DEFAULT '0',
  `tit_eleitor_uf` varchar(5) NOT NULL DEFAULT '0',
  `cert_reserv` varchar(3) NOT NULL DEFAULT '0',
  `cert_reserv_numero` varchar(20) NOT NULL DEFAULT '0',
  `cert_reserv_categoria` varchar(50) NOT NULL DEFAULT '0',
  `cert_reserv_regiao` varchar(50) NOT NULL DEFAULT '0',
  `cert_reserv_uf` varchar(5) NOT NULL DEFAULT '0',
  `end_res_cep` varchar(9) NOT NULL DEFAULT '0',
  `end_res_rua` varchar(150) NOT NULL DEFAULT '0',
  `end_res_bairro` varchar(150) NOT NULL DEFAULT '0',
  `end_res_numero` varchar(9) NOT NULL DEFAULT '0',
  `end_res_complemento` varchar(150) NOT NULL DEFAULT '0',
  `end_res_cidade` varchar(80) NOT NULL DEFAULT '0',
  `end_res_uf` varchar(5) NOT NULL DEFAULT '0',
  `end_com_cep` varchar(9) NOT NULL DEFAULT '0',
  `end_com_rua` varchar(150) NOT NULL DEFAULT '0',
  `end_com_bairro` varchar(150) NOT NULL DEFAULT '0',
  `end_com_numero` varchar(9) NOT NULL DEFAULT '0',
  `end_com_complemento` varchar(150) NOT NULL DEFAULT '0',
  `end_com_cidade` varchar(80) NOT NULL DEFAULT '0',
  `end_com_uf` varchar(5) NOT NULL DEFAULT '0',
  `tel_res` varchar(20) NOT NULL DEFAULT '0',
  `tel_res_obs` varchar(150) NOT NULL DEFAULT '0',
  `tel_com` varchar(20) NOT NULL DEFAULT '0',
  `tel_com_obs` varchar(150) NOT NULL DEFAULT '0',
  `tel_mov` varchar(20) NOT NULL DEFAULT '0',
  `tel_mov_obs` varchar(150) NOT NULL DEFAULT '0',
  `data_admissao` varchar(20) NOT NULL DEFAULT '0',
  `cargo` varchar(50) NOT NULL DEFAULT '0',
  `observacao` varchar(200) NOT NULL DEFAULT '0',
  `salario` varchar(150) NOT NULL DEFAULT '0',
  `vale_transpobre` varchar(3) NOT NULL DEFAULT '0',
  `data_demissao` varchar(20) NOT NULL DEFAULT '0',
  `ctps_num` varchar(50) NOT NULL DEFAULT '0',
  `ctps_serie` varchar(50) NOT NULL DEFAULT '0',
  `ctps_uf` varchar(50) NOT NULL DEFAULT '0',
  `ctps_data` varchar(50) NOT NULL DEFAULT '0',
  `habilitacao` text NOT NULL DEFAULT '0',
  `observacoes` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `coordenadores`
--

INSERT INTO `coordenadores` (`id`, `nome`, `nascimento`, `estado_civil`, `profissao`, `sexo`, `cpf`, `rg`, `rg_orgao_expeditor`, `rg_uf`, `rg_data`, `email`, `contato_empresa`, `funcao_empresa`, `certidao`, `certidao_numero`, `certidao_cartorio`, `certidao_livro`, `certidao_folha`, `certidao_cidade`, `certidao_uf`, `tit_eleitor`, `tit_eleitor_zona`, `tit_eleitor_secao`, `tit_eleitor_uf`, `cert_reserv`, `cert_reserv_numero`, `cert_reserv_categoria`, `cert_reserv_regiao`, `cert_reserv_uf`, `end_res_cep`, `end_res_rua`, `end_res_bairro`, `end_res_numero`, `end_res_complemento`, `end_res_cidade`, `end_res_uf`, `end_com_cep`, `end_com_rua`, `end_com_bairro`, `end_com_numero`, `end_com_complemento`, `end_com_cidade`, `end_com_uf`, `tel_res`, `tel_res_obs`, `tel_com`, `tel_com_obs`, `tel_mov`, `tel_mov_obs`, `data_admissao`, `cargo`, `observacao`, `salario`, `vale_transpobre`, `data_demissao`, `ctps_num`, `ctps_serie`, `ctps_uf`, `ctps_data`, `habilitacao`, `observacoes`) VALUES
(1, 'Alison Vitor Bucker', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'Robert Bircherner', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `id_inst` int(11) NOT NULL DEFAULT 0,
  `id_coordenador` int(11) NOT NULL DEFAULT 0,
  `id_coordenador_estagio` int(11) NOT NULL DEFAULT 0,
  `nome_curso` varchar(250) NOT NULL DEFAULT '0',
  `abrev` varchar(50) NOT NULL DEFAULT '0',
  `area` int(11) NOT NULL DEFAULT 0,
  `curso_no_doc` varchar(250) NOT NULL DEFAULT '0',
  `cod_inep` varchar(250) NOT NULL DEFAULT '0',
  `cod_mod_inep` varchar(250) NOT NULL DEFAULT '0',
  `cod_polo_ed_dist` varchar(250) NOT NULL DEFAULT '0',
  `grade_unica` varchar(3) NOT NULL DEFAULT '0',
  `grade_unica_excecao` varchar(3) NOT NULL DEFAULT '0',
  `educacao_distancia` varchar(3) NOT NULL DEFAULT '0',
  `titulo` varchar(250) NOT NULL DEFAULT '0',
  `titulacao` varchar(250) NOT NULL DEFAULT '0',
  `eixo_tecnologico` varchar(250) NOT NULL DEFAULT '0',
  `area_conhecimento` varchar(250) NOT NULL DEFAULT '0',
  `area_concentracao` varchar(250) NOT NULL DEFAULT '0',
  `habilitacao` varchar(250) NOT NULL DEFAULT '0',
  `autorizacao` text NOT NULL DEFAULT '0',
  `reconhecimento` text NOT NULL DEFAULT '0',
  `renovacao_conhecimento` text NOT NULL DEFAULT '0',
  `amparo_legal` text NOT NULL DEFAULT '0',
  `perfil_profissional` text NOT NULL DEFAULT '0',
  `observacao` text NOT NULL DEFAULT '0',
  `prefixo_curso` varchar(50) NOT NULL DEFAULT '0',
  `mostrar_faltas` varchar(3) NOT NULL DEFAULT '0',
  `separar_carg_hor_pratica` varchar(3) NOT NULL DEFAULT '0',
  `separar_carg_hor_dispensa` varchar(3) NOT NULL DEFAULT '0',
  `mostrar_ano_semestre` varchar(3) NOT NULL DEFAULT '0',
  `mostrar_titulo_periodo` varchar(3) NOT NULL DEFAULT '0',
  `substituir_dispensa_aproveitamento` varchar(3) NOT NULL DEFAULT '0',
  `substituir_pendente_acursar` varchar(3) NOT NULL DEFAULT '0',
  `nome_ch` varchar(250) NOT NULL DEFAULT '0',
  `abrev_ch` varchar(50) NOT NULL DEFAULT '0',
  `nome_ch_anual` varchar(250) NOT NULL DEFAULT '0',
  `abrev_ch_anual` varchar(250) NOT NULL DEFAULT '0',
  `id_curso_equivalencia` int(11) NOT NULL DEFAULT 0,
  `observacao_historico` text NOT NULL DEFAULT '0',
  `periodo_letivo_encerrado` varchar(3) NOT NULL DEFAULT '0',
  `desbloq_prof_ano_let_1` varchar(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `id_inst`, `id_coordenador`, `id_coordenador_estagio`, `nome_curso`, `abrev`, `area`, `curso_no_doc`, `cod_inep`, `cod_mod_inep`, `cod_polo_ed_dist`, `grade_unica`, `grade_unica_excecao`, `educacao_distancia`, `titulo`, `titulacao`, `eixo_tecnologico`, `area_conhecimento`, `area_concentracao`, `habilitacao`, `autorizacao`, `reconhecimento`, `renovacao_conhecimento`, `amparo_legal`, `perfil_profissional`, `observacao`, `prefixo_curso`, `mostrar_faltas`, `separar_carg_hor_pratica`, `separar_carg_hor_dispensa`, `mostrar_ano_semestre`, `mostrar_titulo_periodo`, `substituir_dispensa_aproveitamento`, `substituir_pendente_acursar`, `nome_ch`, `abrev_ch`, `nome_ch_anual`, `abrev_ch_anual`, `id_curso_equivalencia`, `observacao_historico`, `periodo_letivo_encerrado`, `desbloq_prof_ano_let_1`) VALUES
(1, 0, 0, 0, 'Saco', 'cfhj', 0, 'fghjfj', 'fghj', 'fgujky', 'sfgh', '0', '1', '1', '2,1', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'gjj', 'ghj', 'ghj', 'dghj', 'ghdj', 'dghj', 'sfghsfgh', '1', '0', '1', '0', '1', '0', '1', 'dhj', 'dhgj', 'dghj', 'dghjd', 0, 'dghjdghj', '0', '1'),
(2, 0, 0, 0, 'Murcho', 'cfhj', 0, 'fghjfj', 'fghj', 'fgujky', 'sfgh', '0', '1', '1', '2,1', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'gjj', 'ghj', 'ghj', 'dghj', 'ghdj', 'dghj', 'sfghsfgh', '1', '0', '1', '0', '1', '0', '1', 'dhj', 'dhgj', 'dghj', 'dghjd', 0, 'dghjdghj', '0', '1'),
(3, 0, 0, 0, 'sfgh', 'cfhj', 0, 'fghjfj', 'fghj', 'fgujky', 'sfgh', '0', '1', '1', '2,1', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'sfgh', 'gjj', 'ghj', 'ghj', 'dghj', 'ghdj', 'dghj', 'sfghsfgh', '1', '0', '1', '0', '1', '0', '1', 'dhj', 'dhgj', 'dghj', 'dghjd', 0, 'dghjdghj', '0', '1'),
(4, 0, 0, 0, 'aaaa Man', 'amn', 0, 'asd', 'asd', 'sad', 'sfdf', '1', '0', '0', '2,1', '456546qw', 'qtgsh', 'sfgh', 'sfgh', 'fsgh', 'sfgh', 'sfgh', 'sfgh', 'sfh', 'sfh', 'sfh', '', '1', '0', '1', '0', '0', '1', '0', '45qyt54', 'ag', 'sg', 'dsfg', 3, 'srtyty', '1', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '0',
  `email` varchar(200) NOT NULL DEFAULT '0',
  `pass` varchar(32) NOT NULL DEFAULT '0',
  `active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `master`
--

INSERT INTO `master` (`id`, `name`, `email`, `pass`, `active`) VALUES
(1, 'Alison Bucker', 'originalalison@gmail.com', '1c181a54293224de0cff27543782dc75', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculas`
--

CREATE TABLE `matriculas` (
  `id` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL DEFAULT 0,
  `id_turma` int(11) DEFAULT NULL,
  `id_curso` int(11) NOT NULL DEFAULT 0,
  `insc_inep_mec` int(11) NOT NULL DEFAULT 0,
  `matric_longa` int(11) NOT NULL DEFAULT 0,
  `periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `sequencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `periodos`
--

INSERT INTO `periodos` (`id`, `id_curso`, `titulo`, `sequencia`) VALUES
(1, 4, 'Primeiro Período', 1),
(2, 4, 'Segundo Período', 2),
(3, 4, 'wer', 4),
(4, 1, 'Primeiro Período', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL DEFAULT 0,
  `periodo` int(11) NOT NULL DEFAULT 0,
  `titulo` varchar(150) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `id_curso`, `periodo`, `titulo`) VALUES
(1, 4, 1, 'G1'),
(2, 4, 2, 'G2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `admin_company`
--
ALTER TABLE `admin_company`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `coordenadores`
--
ALTER TABLE `coordenadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `admin_company`
--
ALTER TABLE `admin_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `coordenadores`
--
ALTER TABLE `coordenadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
