create table branch
  ( Bno     char (4) not null,
    Street  char (14),
    Area    char (10),
    City    char (10),
    Pcode   char (10),
    Tel_No  char (15),
    Fax_No  char (15) );
create table staff
  ( Sno     char (4) not null,
    FName   char (8),
    LName   char (8),
    Address char (44),
    Tel_No  char (15),
    Position char (12),
    Sex     char,
    DOB     date,
    Salary  integer,
    NIN     char (10),
    Bno     char (4) );
create table property_for_rent
  ( Pno     char (4) not null,
    Street  char (14),
    Area    char (10),
    City    char (10),
    Pcode   char (10),
    Type    char (6),
    Rooms   smallint,
    Rent    integer,
    Ono     char (4),
    Sno     char (4),
    Bno     char (4) );
create table client
  ( Cno     char (4) not null,
    FName   char (8),
    LName   char (8),
    Address char (44),
    Tel_No  char (15),
    Pref_Type char (6),
    Max_Rent integer );
create table owner
  ( Ono     char (4) not null,
    FName   char (8),
    LName   char (8),
    Address char (44),
    Tel_No  char (15) );
create table viewing
  ( Cno     char (4) not null,
    Pno     char (4) not null,
    Date    date,
    Comment char (30) );


