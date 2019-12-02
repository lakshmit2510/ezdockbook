<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-26 12:50:40 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:50:40 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:50:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:50:40 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:50:40 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-26 12:51:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:51:08 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:51:08 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:51:08 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:51:17 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-06 00:00:00" && booking.Checkin <= "2019-11-13 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:51:17 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:51:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-06 00:00:00" && booking.Checkin <= "2019-11-13 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:51:17 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:51:34 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:51:34 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:51:34 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:51:34 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:51:45 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-05 00:00:00" && booking.Checkin <= "2019-11-12 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:51:45 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:51:45 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-05 00:00:00" && booking.Checkin <= "2019-11-12 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:51:45 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:52:03 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-10-06 00:00:00" && booking.Checkin <= "2019-10-13 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:52:03 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:52:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-10-06 00:00:00" && booking.Checkin <= "2019-10-13 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:52:04 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:52:33 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-09-10 00:00:00" && booking.Checkin <= "2019-09-17 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:52:33 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:52:33 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-09-10 00:00:00" && booking.Checkin <= "2019-09-17 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:52:33 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 12:52:38 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.SlotType = 3 && booking.Checkin >= "2019-09-10 00:00:00" && booking.Checkin <= "2019-09-17 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 12:52:38 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 12:52:38 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.SlotType = 3 && booking.Checkin >= "2019-09-10 00:00:00" && booking.Checkin <= "2019-09-17 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 12:52:38 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 13:29:13 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 13:29:13 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 13:29:13 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 13:29:13 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:21:24 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-26 21:21:24 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:21:24 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 21:21:24 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:21:24 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:33:17 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 GROUP BY Booked,DockType
ERROR - 2019-11-26 21:33:17 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:33:20 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 GROUP BY Booked,DockType
ERROR - 2019-11-26 21:33:20 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:38:06 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:38:06 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 21:38:06 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:38:06 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:38:09 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:38:09 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:38:09 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:38:09 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 21:39:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:39:30 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 21:39:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:39:30 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:44:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:44:40 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:44:45 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:44:45 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-26 21:45:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-26 21:45:40 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-26 21:45:44 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-19 00:00:00" && booking.Checkin <= "2019-11-26 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-26 21:45:44 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
