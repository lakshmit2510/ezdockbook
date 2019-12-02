<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-28 00:12:54 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 00:12:54 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 02:17:23 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 02:18:18 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 03:14:19 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 05:32:41 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:46:30 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:46:53 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:46:58 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:47:25 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:47:35 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 07:47:59 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 09:10:54 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 09:33:34 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:27:12 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:27:30 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:27:40 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:27:46 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:30:46 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:31:13 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:31:18 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:19 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:39 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:39 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:39 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:40 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:48 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:50 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:51 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:34:55 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:35:04 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:35:21 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:35:33 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 10:35:48 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 11:05:39 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 11:27:50 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-28 11:27:50 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-28 11:27:50 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-28 11:27:50 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-28 11:27:56 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-28 11:27:56 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-28 11:27:56 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-28 11:27:56 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-28 11:36:15 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:36:15 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:36:15 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:36:15 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:36:15 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:36:15 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:42:39 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:44:56 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:46:47 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:47:57 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:47:57 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:47:57 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:47:57 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:01 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:01 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:01 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:01 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: Warning --> Use of undefined constant DockTypeID - assumed 'DockTypeID' (this will throw an Error in a future version of PHP) /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:48:50 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/ezdockbook/application/views/add_booking.php 318
ERROR - 2019-11-28 11:52:45 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 11:53:31 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 11:55:35 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 12:05:03 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 12:06:35 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 12:07:06 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 12:08:09 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 13:52:07 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 14:07:53 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 14:13:13 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 14:13:26 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 14:23:12 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-28 14:23:12 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-28 14:23:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-28 14:23:12 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-28 15:10:10 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.slots.Type' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select slots.SlotName,slots.Type,DATE(Floor(booking.CheckIn)) as Date, slottypes.Type AS DockType, COUNT(slottypes.Type) as BookedDocks,
    DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked from booking
    LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType)
    LEFT JOIN bookedslots ON (bookedslots.SlotType = booking.SlotType AND booking.BookingID = bookedslots.BookingUID)
    LEFT JOIN slots ON (slots.SlotID = bookedslots.SlotID)
    where booking.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00"
    GROUP BY DockType,Booked,SlotName order by Date
ERROR - 2019-11-28 15:10:10 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 124
ERROR - 2019-11-28 15:10:10 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ezdockbook.booking.CheckIn' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select DATE(Floor(booking.CheckIn)) as Date, slottypes.Type as DockType,numberofslots.NumberOfDocks, DATE_FORMAT(booking.CheckIn, '%e %b %Y') as Booked, 
	COUNT(slottypes.Type) as BookedDocks from booking 
	LEFT JOIN slottypes ON (slottypes.STypeID = booking.SlotType) 
	LEFT JOIN (SELECT slots.Type as SlotTypeNo, COUNT(slottypes.Type) as NumberOfDocks From slots INNER JOIN slottypes ON (slottypes.STypeID = slots.Type) GROUP BY SlotTypeNo) as numberofslots 
	ON (slottypes.STypeID = numberofslots.SlotTypeNo ) where slottypes.Active = 1 && booking.Checkin >= "2019-11-21 00:00:00" && booking.Checkin <= "2019-11-28 00:00:00" GROUP BY Booked,DockType
ERROR - 2019-11-28 15:10:10 --> Severity: error --> Exception: Call to a member function result() on bool /var/www/html/ezdockbook/application/models/Report_model.php 101
ERROR - 2019-11-28 15:15:51 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 15:59:59 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 15:59:59 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 16:01:27 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 16:23:19 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 17:10:44 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
ERROR - 2019-11-28 20:55:47 --> Severity: Core Warning --> Module 'fileinfo' already loaded Unknown 0
