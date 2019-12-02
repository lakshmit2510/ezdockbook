<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-27 11:00:01 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:12:01 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:13:35 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:13:53 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:17:30 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:18:54 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:18:57 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:19:24 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:19:31 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:20:09 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 11:25:55 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 12:00:34 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 16:50:40 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 17:01:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-27 17:01:01 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-27 17:01:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:01:01 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:05:45 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:05:45 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:05:47 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-27 17:05:47 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-27 17:10:27 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:10:27 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:13:55 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 17:17:38 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:17:38 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:17:39 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-27 17:17:39 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-27 17:18:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-27 17:18:49 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-27 17:18:49 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:18:49 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:22:00 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 17:24:44 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-27 17:24:44 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-27 17:24:44 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-20 00:00:00" && booking.Checkin <= "2019-11-27 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-27 17:24:44 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-27 17:30:59 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 17:49:06 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-27 23:58:32 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
