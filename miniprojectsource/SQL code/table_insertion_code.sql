
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
