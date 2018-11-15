
CREATE DATABASE deliburger;
USE deliburger;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Biba'),
(7, 'Flying Machine'),
(8, 'Nike'),
(9, 'Adidas'),
(10, 'Kidzee'),
(11, 'Ikea'),
(12, 'Philips');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'HAMBURGUESAS CASERAS'),
(2, 'HAMBURGUESAS LIGTH'),
(3, 'HAMBURGUESAS GRANDES'),
(4, 'MINIHAMBURGUESAS'),
(5, 'HAMBURGUESAS VEGETALES'),
(6, 'HAMBURGUESAS PARA MAYORES');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `tr_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, '3', '3', 'Hamburguesa Grande', 10, 'Hamburgesa de Carne Gigante', 'ha1.png', 'hamburguesa grande carne'),
(2, '3', '3', 'Hamburguesa De Queso', 15, 'Hamburguesa con Queso y ensalada', 'ha2.png', 'Hamburguesa con Queso'),
(3, '3', '3', 'Hamburguesa con Pollo', 16, 'Hamburguesa Grande con Pollo Extra', 'ha3.png', 'hamburguesa pollo grande'),
(4, '1', '2', 'Hamburguesa Doble', 12, 'Hamburguesa con doble porcion', 'ha4.png', 'hamburguesa doble'),
(5, '1', '4', 'Hamburguesa con POllo Frito', 25, 'Hamburguesa con un pecho de pollo frito', 'ha5.png', 'hamburguesa pollo frito'),
(6, '2', '5', 'Hamburguesa Vegana', 15, 'hamburguesa con pollo hecho con soya', 'ha6.png', 'hamburguesa Vegana'),
(7, '3', '6', 'Doble Hamburguesa Grande', 10, 'Hamburguesa Gigante con doble porcion', 'ha7.png', 'hamburguesa grande doble'),
(8, '6', '6', 'Hamburguesa sin Carne', 20, 'Hamburguesa sin carne y con fideos de Pollo', 'ha8.png', 'hamburguesa MAYORES pollo'),
(9, '4', '7', 'Hamburguesa Chiki', 7, 'MINIHAMBURGUESA con pollo', 'ha9.png', 'MINIHAMBURGUESA pollo'),
(10, '3', '7', 'Hamburguesa Grande Simple con doble', 18, 'hamburguesa de pollo Simple', 'ha10.png', 'hamburguesa Simple'),
(11, '5', '10', 'Hamburguesa de Pollo a la Plancha', 20, 'Hamburguesa con pollo hecho a la Plancha', 'ha11.png', 'hamburguesa pollo Plancha'),
(12, '4', '10', 'Hamburguesa Clasica', 14, 'Hamburguesa de Carne o Pollo', 'ha12.png', 'hamburguesa carne pollo'),
(13, '4', '11', 'Hamburguesa Royal', 12, 'hamburguesa con Queso Extra', 'ha13.png', 'hamburguesa Queso'),
(14, '3', '12', 'hamburguesa Gigante de Pollo Frito', 4, 'hamburguesa con pollo Frito Gigante', 'ha14.png', 'hamburguesa pollo Gigante'),
(15, '3', '8', 'hamburguesa Gigante Clasica', 5, 'hamburguesa con Pollo o carne Extra', 'ha15.png', 'hamburguesa pollo'),
(16, '4', '9', 'hamburguesa MiniChack', 6, 'hamburguesa con pollo Clasica pequeña', 'ha16.png', 'hamburguesa pequeña Clasica');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `amt` int(100) NOT NULL,
  `tr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Victor', 'Espinoza', 'victor@gmail.com', '123456', '935739917', 'Prem Electronics Block Road Ratu', 'Prem Electronics Block Road Ratu'),
(2, 'Victor', 'Islachin', 'islachin@krotos.com', '123456', '931649503', 'West Lohanipur, Kadamkuan, MNS Lane', 'Patna'),
(3, 'Franco', 'Manrique', 'franco@star.com', '123456', '931649503', 'West Lohanipur, Kadamkuan, MNS Lane', 'Patna'),
(4, 'Edson', 'Vargas', 'edson.prem@gmail.com', '123456', '935639917', 'Prem Electronics Block Road Ratu', 'sdsd'),
(5, 'Luis', 'Jara', 'jara@gmail.com', '123456', '935639917', 'Prem Electronics Block Road Ratu', 'bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
