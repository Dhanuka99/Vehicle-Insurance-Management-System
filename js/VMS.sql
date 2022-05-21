DROP DATABASE Vehicle;
CREATE DATABASE Vehicle
DROP TABLE Customer
use Vehicle;

create table Customer(
customerID int not null,
customerNIC varchar(10) ,
customerFirstName varchar(25),
customerLastName varchar(25),
customerAddress varchar(30),
customerMail varchar(30),
customerGender varchar(10),
customerDOB date,
customerUserName varchar(25),
customerPassword varchar(10),
primary key(customerID),
);


INSERT INTO Customer VALUES(1,'993570710V','Dhanuka','Jayasinghe','kurunegala','danuka@gmail.com','male','1999/12/22','dhanuka','1234');
INSERT INTO Customer VALUES(2,'2000454512','Sanka','Jayaweera','panadura','sanka@gmail.com','male','2000/9/1','sanka','1234');
INSERT INTO Customer VALUES(3,'9845121111','namal','mendis','kandy','namal@gmail.com','male','1998/12/12','namal','1234');
INSERT INTO Customer VALUES(4,'1745452326','kasun','dissanayaka','colombo','kasun@gmail.com','male','1917/3/1','kasun','1234');
INSERT INTO Customer VALUES(5,'2001565645','shalini','muthumali','rathnapura','shalini@gmail.com','female','2001/1/17','shalini','1234');

create table Customer_Phone(
customerID int not null,
customerNumber varchar(10),
constraint fk_customer_phone foreign key(customerID) references Customer(customerID)
);
INSERT INTO Customer_Phone VALUES(1,'0778090357');
INSERT INTO Customer_Phone VALUES(1,'0776580307');
INSERT INTO Customer_Phone VALUES(1,'0773546058');
INSERT INTO Customer_Phone VALUES(2,'0729898555');
INSERT INTO Customer_Phone VALUES(2,'0712244777');


create table CustomerLoginDetails(
customerID int not null,
customerUserName varchar(25),
customerPassword varchar(10),
customerLoginDate date,
customerLogOutDetails date,
primary key(customerID,customerUserName)
);

INSERT INTO CustomerLoginDetails VALUES(1,'dhanuka','1234','2022/04/27','2022/04/28');
INSERT INTO CustomerLoginDetails VALUES(2,'sanka','1234','2022/04/27','');

create table Employee(
employeeID int,
employeeNIC varchar(10),
employeeFirstName varchar(20),
employeeLastName varchar(20),
employeeAddress varchar(20),
employeeJobRole varchar(20),
employeeGender varchar(20),
employeeDOB varchar(20),
employeeUserName varchar(20),
employeePassword varchar(20),
primary key(employeeID)
);

INSERT INTO Employee VALUES(10,'993570330V','Ishara','Karunathilaka','mathale','AreaManager','female','1999/7/8','ishara','789');
INSERT INTO Employee VALUES(11,'985241111V','Naduni','ekanayake','kelaniya','AreaManager','female','1998/7/21','naduni','789');
INSERT INTO Employee VALUES(12,'124533333V','pasidu','dissanayaka','kurunegala','Admin','male','1234/2/21','pasidu','789');

create table EmployeeLoginDetails(
employeeID int,
employeeUserName varchar(20),
employeePassword varchar(20),
employeeLoginDate date,
employeeLogOutDetails date,
primary key(employeeID,employeeUserName)
);

INSERT INTO EmployeeLoginDetails VALUES(10,'ishara','789','2022/04/25','2022/04/25');
INSERT INTO EmployeeLoginDetails VALUES(11,'naduni','789','2022/04/25','');

create table Employee_phone(
employeeID int,
employeePhoneNumber varchar(10),
constraint Fk_Employee_Phone foreign key(employeeID) references Employee(employeeID)
);
INSERT INTO Employee_phone VALUES(10,'0775566322');
INSERT INTO Employee_phone VALUES(10,'0726565888');
INSERT INTO Employee_phone VALUES(11,'0725252666');
INSERT INTO Employee_phone VALUES(11,'0789874444');

create table Vehicle(
vehicleNo varchar(7) not null,
vehicleModel varchar(10),
vehicleChassiNo varchar(30),
vehicleFuelType varchar(10),
vehicleClass varchar(20),
vehicleColor varchar(10),
customerID int not null,
primary key(vehicleNo),
foreign key(customerID) references Customer(customerID)
);
INSERT INTO Vehicle VALUES('KA4799','Nissan','NM213232','petrol','luxury','red','1');
INSERT INTO Vehicle VALUES('BAS4514','bajaj','CV323244','petrol','bike','blue','1');
INSERT INTO Vehicle VALUES('JU3857','Nissan','NM213232','petrol','luxury','red','2');

create table policy(
policyID varchar(10) not null,
policyName varchar(20),
policyRegisterDate date,
InsuranceType varchar(20),
primary key(policyID)
);

INSERT INTO policy VALUES('1000','MAX','2018/02/8','Full Insurance');
INSERT INTO policy VALUES('2000','PAN','2018/02/8','thirtparty Insurance');
INSERT INTO policy VALUES('3000','SAN','2018/02/8','Full Insurance');
INSERT INTO policy VALUES('4000','LAN','2018/02/8','thirtparty Insurance');

create table Policy_Benefit(
policyID varchar(10) not null,
benefit varchar(50),
constraint fk_Policy_Benefit foreign key(policyID) references Policy(policyID)
);
INSERT INTO Policy_Benefit VALUES('1000','hospital chagers');
INSERT INTO Policy_Benefit VALUES('1000','claim option');
INSERT INTO Policy_Benefit VALUES('2000','claim option');

create table Insurance(
insuranceID varchar(20) not null,
insuranceType varchar(20),
insuranceApplyDate date,
insuranceDuration int,
insuranceExpireDate date,
insurancePayment decimal(12,2),
insuranceStatus varchar(10),
policyID varchar(10) not null,
customerID int not null,
vehicleNo varchar(7) not null,
primary key(insuranceID),
foreign key(customerID) references Customer(customerID),
foreign key(vehicleNo) references Vehicle(vehicleNo),
foreign key(policyID) references Policy(policyID)
);
INSERT INTO Insurance VALUES('555','full insurance','2022-2-2',1,'2022-2-2','1500.00','pending','1000',1,'KA4799');


create table Claim(
claimID varchar(10) not null,
claimDate date,
claimLocation varchar(30),
image varchar(30),
insuranceID varchar(20) not null,
primary key(claimID),
foreign key(insuranceID) references Insurance(insuranceID)
);
INSERT INTO Claim VALUES('001','2022/05/01','badulla','image1','555');


create table Renew(
renewID varchar(10) not null,
renewDate date,
vehicleBook varchar(30),
smokeReport varchar(30),
paymentReceipt varchar(30),
renewStatus varchar(20),
expireDate date,
insuranceID varchar(20) not null,
primary key(renewID),
foreign key(insuranceID) references Insurance(insuranceID)

);
INSERT INTO Renew VALUES('333','2022/05/01','vehicleBook','smokeReport','paymentReceipt','pending','2022/05/01','555');


select * from Customer;
select * from Customer_Phone;
select * from CustomerLoginDetails;
select * from Employee;
select * from Employee_phone;
select * from EmployeeLoginDetails;
select * from Vehicle;
select * from policy;
select * from Policy_Benefit;
select * from Insurance;
select * from Claim;
select * from Renew;