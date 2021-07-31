
CREATE DATABASE database_used;
CREATE TABLE OWNER
(
OwnerID VARCHAR(3),
OwnerUsername VARCHAR(20),
OwnerFName VARCHAR(20),
OwnerLName VARCHAR(20),
OwnerPass VARCHAR(20),
OwnerContact VARCHAR(10),
OwnerAddress VARCHAR(20),
PRIMARY KEY(OwnerID)
);

CREATE TABLE TENANT
(
TenantID VARCHAR(3),
TenantUsername VARCHAR(20),
TenantFName VARCHAR(20),
TenantLName VARCHAR(20),
TenantPass VARCHAR(20),
TenantContact VARCHAR(10),
TenantAddress VARCHAR(20),
PRIMARY KEY(TenantID)
);

CREATE TABLE BUILDING
(
BuildingID VARCHAR(3),
OwnerID VARCHAR(3),
BuildingAddress VARCHAR(25),
BuildingName VARCHAR(20),
BuildingFloors INTEGER(3),
Tenants INTEGER(3),
PRIMARY KEY(BuildingID),
FOREIGN KEY(OwnerID) REFERENCES OWNER(OwnerID) ON DELETE CASCADE
);


CREATE TABLE APARTMENT
(
ApartmentID VARCHAR(3),
FlatNum VARCHAR(10),
BuildingID VARCHAR(3),
TenantID VARCHAR(3),
Rent INTEGER(10),
StartDate DATE,
Owe INTEGER(10),

PRIMARY KEY(ApartmentID),
FOREIGN KEY(BuildingID) REFERENCES BUILDING(BuildingID) ON DELETE CASCADE,
FOREIGN KEY(TenantID) REFERENCES TENANT(TenantID) ON DELETE CASCADE
);


CREATE TABLE PAYMENT
(
PaymentID VARCHAR(3),
PaymentDate DATE,
ApartmentID VARCHAR(3),
TenantID VARCHAR(3),
FlatNum VARCHAR(10),
PaidRent INTEGER(10),

PRIMARY KEY(PaymentID),
FOREIGN KEY(ApartmentID) REFERENCES APARTMENT(ApartmentID) ON DELETE CASCADE,
FOREIGN KEY(TenantID) REFERENCES TENANT(TenantID) ON DELETE CASCADE
);

CREATE DEFINER=`root`@`localhost` TRIGGER `tenantNum` AFTER INSERT ON `apartment` FOR EACH ROW UPDATE building SET building.Tenants = building.Tenants + 1 WHERE NEW.BuildingID = building.BuildingID;
CREATE DEFINER=`root`@`localhost` TRIGGER `tenantNumdecrease` AFTER DELETE ON `apartment` FOR EACH ROW UPDATE building SET building.Tenants = building.Tenants - 1 WHERE OLD.BuildingID = building.BuildingID;
CREATE DEFINER=`root`@`localhost` TRIGGER `oweing` AFTER INSERT ON `payment` FOR EACH ROW UPDATE apartment SET apartment.Owe = apartment.Owe - NEW.PaidRent WHERE NEW.FlatNum = apartment.FlatNum AND NEW.ApartmentID = apartment.ApartmentID;
CREATE DEFINER=`root`@`localhost` PROCEDURE `getDueTenants`(IN `namee` VARCHAR(20)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT tenant.TenantFName,owner.OwnerFName,apartment.FlatNum,apartment.Rent,apartment.Owe FROM building,apartment,tenant,owner WHERE apartment.TenantID=tenant.TenantID AND apartment.BuildingID=building.BuildingID AND building.OwnerID=owner.OwnerID AND apartment.Owe>0 AND owner.OwnerUsername =namee;


INSERT INTO `owner` (`OwnerID`, `OwnerUsername`, `OwnerFName`, `OwnerLName`, `OwnerPass`, `OwnerContact`, `OwnerAddress`) VALUES ('O1', 'shreyash123','Shreyash','Sinha', 'password51', '9983572845', 'Domlur Bangalore');
INSERT INTO `owner` (`OwnerID`, `OwnerUsername`, `OwnerFName`, `OwnerLName`, `OwnerPass`, `OwnerContact`, `OwnerAddress`) VALUES ('O2', 'shashwat123','Shashwat','Patwari', 'root', '9894763545', 'JP Nagar Bangalore');
INSERT INTO `owner` (`OwnerID`, `OwnerUsername`, `OwnerFName`, `OwnerLName`, `OwnerPass`, `OwnerContact`, `OwnerAddress`) VALUES ('O3', 'shirish123','Shirish','Kumar', 'password49', '9847533445', 'Sarjapur Bangalore');
INSERT INTO `owner` (`OwnerID`, `OwnerUsername`, `OwnerFName`, `OwnerLName`, `OwnerPass`, `OwnerContact`, `OwnerAddress`) VALUES ('O4', 'shubham123','Shubham','Kulkarni', 'password52', '9487357334', 'BTM Layout Bangalore');
INSERT INTO `owner` (`OwnerID`, `OwnerUsername`, `OwnerFName`, `OwnerLName`, `OwnerPass`, `OwnerContact`, `OwnerAddress`) VALUES ('O5', 'shivam123','Shivam','Chauhan', 'password50', '9834394365', 'Richmond Bangalore');

INSERT INTO `tenant` (`TenantID`, `TenantUsername`, `TenantFName`, `TenantLName`, `TenantPass`, `TenantContact`, `TenantAddress`) VALUES ('T1', 'videep123','Videep','Venkatesha', 'bgs22', '9743826756', 'Domlur Bangalore');
INSERT INTO `tenant` (`TenantID`, `TenantUsername`, `TenantFName`, `TenantLName`, `TenantPass`, `TenantContact`, `TenantAddress`) VALUES ('T2', 'rishi123','Rishi','Kashyap', 'point', '9834574466', 'JP Nagar Bangalore');
INSERT INTO `tenant` (`TenantID`, `TenantUsername`, `TenantFName`, `TenantLName`, `TenantPass`, `TenantContact`, `TenantAddress`) VALUES ('T3', 'aditya123','Aditya','Kumar', 'bgs1', '9875687542', 'Sarjapur Bangalore');
INSERT INTO `tenant` (`TenantID`, `TenantUsername`, `TenantFName`, `TenantLName`, `TenantPass`, `TenantContact`, `TenantAddress`) VALUES ('T4', 'shreepreeth123','Shreepreeth','Naidu', 'bgs19', '9847875648', 'BTM Layout Bangalore');
INSERT INTO `tenant` (`TenantID`, `TenantUsername`, `TenantFName`, `TenantLName`, `TenantPass`, `TenantContact`, `TenantAddress`) VALUES ('T5', 'umashankar123','Umashankar','Shrivats', 'bgs23', '9764875438', 'Richmond Bangalore');

INSERT INTO `building` (`BuildingID`, `OwnerID`, `BuildingAddress`, `BuildingName`, `BuildingFloors`, `Tenants`) VALUES ('B1', 'O1', 'Domlur Bangalore', 'sagar shree', '15', '0');
INSERT INTO `building` (`BuildingID`, `OwnerID`, `BuildingAddress`, `BuildingName`, `BuildingFloors`, `Tenants`) VALUES ('B2', 'O2', 'JP Nagar Banglore', 'vastu placid', '20', '0');
INSERT INTO `building` (`BuildingID`, `OwnerID`, `BuildingAddress`, `BuildingName`, `BuildingFloors`, `Tenants`) VALUES ('B3', 'O3', 'Sarjapur Bangalore', 'Peace apartments', '15', '0');
INSERT INTO `building` (`BuildingID`, `OwnerID`, `BuildingAddress`, `BuildingName`, `BuildingFloors`, `Tenants`) VALUES ('B4', 'O4', 'BTM Layout Bangalore', 'Jolly City', '19', '0');

INSERT INTO `apartment` (`ApartmentID`, `FlatNum`, `BuildingID`, `TenantID`, `Rent`, `StartDate`, `Owe`) VALUES ('A1', '7-04', 'B1', 'T1', '22000', '2021-01-01', '22000');
INSERT INTO `apartment` (`ApartmentID`, `FlatNum`, `BuildingID`, `TenantID`, `Rent`, `StartDate`, `Owe`) VALUES ('A2', '6-02', 'B2', 'T2', '23000', '2021-01-02', '23000');
INSERT INTO `apartment` (`ApartmentID`, `FlatNum`, `BuildingID`, `TenantID`, `Rent`, `StartDate`, `Owe`) VALUES ('A3', '13-06', 'B3', 'T3', '24000', '2021-01-15', '24000');

INSERT INTO `payment` (`PaymentID`, `PaymentDate`, `ApartmentID`, `TenantID`, `FlatNum`, `PaidRent`) VALUES ('P1', '2021-01-14', 'A1', 'T1', '7-04', '20000');
INSERT INTO `payment` (`PaymentID`, `PaymentDate`, `ApartmentID`, `TenantID`, `FlatNum`, `PaidRent`) VALUES ('P2', '2021-01-15', 'A2', 'T2', '6-02', '15000');
INSERT INTO `payment` (`PaymentID`, `PaymentDate`, `ApartmentID`, `TenantID`, `FlatNum`, `PaidRent`) VALUES ('P3', '2021-01-15', 'A3', 'T3', '13-06', '20000');
