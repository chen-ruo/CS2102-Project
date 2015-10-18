create table applicant(
  firstName varchar(64)not null,
  lastName varchar(64) not null,
  email varchar(128) primary key,
  password varchar(64) not null,
  age INT not null,
  mobileNumber varchar(16),
  gender char(8) not null check (gender = 'Male' or gender = 'Female'),
  dateOfBirth date not null,
  nationality varchar(32) not null,
  personalWeb varchar(128)
);

create table employer(
  email varchar(128) primary key,
  password varchar(64) not null,
  companyName varchar(64) not null,
  companyNum varchar(32) not null, 
  companyURL varchar(64),
  postalCode char(6) not null,
  natureOfBusiness varchar(32),
  companyAddress varchar(256) not null,
  industry varchar(32)
);

create table job(
  jobID varchar(16),
  jobType varchar(32) check(jobType = 'Intern' or jobType = 'Permanent' or jobType = 'Temporary'),
  owner varchar(128) not null,
  Foreign Key(owner)References employer(email),
  category varchar(32) not null,
  minRequiredQualification varchar(32) not null,
  minRequiredSkills varchar(512) not null,
  description varchar(512),
  primary key(owner, jobID)
);

create table applyFor(
  emailA varchar(128),
  emailE varchar(128),
  jobID varchar(16),

  Foreign Key (emailE, jobID) References job(owner, jobID),
  Foreign Key (emailA) References applicant (email),
  primary key (emailA, emailE, jobID)
)