<?php
/***                                                                        ***\
    languages/English.php

    Translation hash for English.  This also doubles as the template for
    other translations, since it's mostly just blank (default) entries.
\***                                                                        ***/

// Set the locale to English UTF-8
setlocale(LC_ALL, 'en_US.UTF-8');

// Define the language lookup hash ** Do not touch the next line
$L = array(
// Add your translations below here.
// Warning, any custom comments will be lost during translation updates.
//
// Shared Terms
    '$1 hr'                                              => '',
    '$1 hrs'                                             => '',
    '$1 min'                                             => '',
    '$1 mins'                                            => '',
    '$1 programs, using $2 ($3) out of $4 ($5 free).'    => '',
    '$1 to $2'                                           => '',
    'Advanced Options'                                   => '',
    'Airtime'                                            => '',
    'All recordings'                                     => '',
    'Auto-expire recordings'                             => '',
    'Auto-flag commercials'                              => '',
    'Auto-transcode'                                     => '',
    'Backend Status'                                     => '',
    'Cancel this schedule.'                              => '',
    'Category'                                           => '',
    'Channel'                                            => '',
    'Check for duplicates in'                            => '',
    'Create Schedule'                                    => '',
    'Current recordings'                                 => '',
    'Date'                                               => '',
    'Description'                                        => '',
    'Details for'                                        => '',
    'Display'                                            => '',
    'Duplicate Check method'                             => '',
    'End Late'                                           => '',
    'Episode'                                            => '',
    'Go'                                                 => '',
    'Hour'                                               => '',
    'IMDB'                                               => '',
    'Inactive'                                           => '',
    'Jump'                                               => '',
    'Jump to'                                            => '',
    'Length (min)'                                       => '',
    'Listings'                                           => '',
    'No'                                                 => '',
    'No. of recordings to keep'                          => '',
    'None'                                               => '',
    'Notes'                                              => '',
    'Only New Episodes'                                  => '',
    'Original Airdate'                                   => '',
    'Previous recordings'                                => '',
    'Rating'                                             => '',
    'Record new and expire old'                          => '',
    'Recorded Programs'                                  => '',
    'Recording Group'                                    => '',
    'Recording Options'                                  => '',
    'Recording Priority'                                 => '',
    'Recording Profile'                                  => '',
    'Rerun'                                              => '',
    'Save'                                               => '',
    'Schedule'                                           => '',
    'Schedule Options'                                   => '',
    'Schedule Override'                                  => '',
    'Schedule normally.'                                 => '',
    'Scheduled Recordings'                               => '',
    'Search'                                             => '',
    'Search Results'                                     => '',
    'Start Date'                                         => '',
    'Start Early'                                        => '',
    'Start Time'                                         => '',
    'Subtitle'                                           => '',
    'Subtitle and Description'                           => '',
    'The requested recording schedule has been deleted.' => '',
    'Title'                                              => '',
    'Transcoder'                                         => '',
    'Unknown'                                            => '',
    'Update'                                             => '',
    'Update Recording Settings'                          => '',
    'Yes'                                                => '',
    'airdate'                                            => '',
    'channum'                                            => '',
    'description'                                        => '',
    'generic_date'                                       => '%a %b %e, %Y',
    'generic_time'                                       => '%I:%M %p',
    'length'                                             => '',
    'minutes'                                            => '',
    'recgroup'                                           => '',
    'rectype-long: always'                               => 'Record at any time on any channel.',
    'rectype-long: channel'                              => 'Record at any time on channel $1.',
    'rectype-long: daily'                                => 'Record this program in this timeslot every day.',
    'rectype-long: dontrec'                              => 'Do not record this specific showing.',
    'rectype-long: finddaily'                            => 'Find and record one showing of this title each day.',
    'rectype-long: findone'                              => 'Find and record one showing of this title.',
    'rectype-long: findweekly'                           => 'Find and record one showing of this title each week.',
    'rectype-long: once'                                 => 'Record only this showing.',
    'rectype-long: override'                             => 'Record this specific showing.',
    'rectype-long: weekly'                               => 'Record this program in this timeslot every week.',
    'rectype: always'                                    => 'Always',
    'rectype: channel'                                   => 'Channel',
    'rectype: daily'                                     => 'Daily',
    'rectype: dontrec'                                   => 'Don\'t Record',
    'rectype: findone'                                   => 'Find Once',
    'rectype: once'                                      => 'Once',
    'rectype: override'                                  => 'Override (record)',
    'rectype: weekly'                                    => 'Weekly',
    'subtitle'                                           => '',
    'title'                                              => '',
// includes/programs.php
    'recstatus: cancelled'         => 'This was scheduled to be recorded but was manually canceled.',
    'recstatus: conflict'          => 'Another program with a higher recording priority will be recorded.',
    'recstatus: currentrecording'  => 'This episode was previously recorded and is still available in the list of recordings.',
    'recstatus: deleted'           => 'This showing was recorded but was deleted before recording was completed.',
    'recstatus: earliershowing'    => 'This episode will be recorded at an earlier time instead.',
    'recstatus: force_record'      => 'This show was manually set to record this specific instance.',
    'recstatus: latershowing'      => 'This episode will be recorded at a later time instead.',
    'recstatus: lowdiskspace'      => 'There wasn\'t enough disk space available to record this program.',
    'recstatus: manualoverride'    => 'This showing was manually set to not record',
    'recstatus: overlap'           => 'This is covered by another scheduled recording for the same program.',
    'recstatus: previousrecording' => 'This episode was previously recorded according to the duplicate policy chosen for this title.',
    'recstatus: recorded'          => 'This showing was recorded.',
    'recstatus: recording'         => 'This showing is being recorded.',
    'recstatus: repeat'            => 'This showing is a repeat and will not be recorded.',
    'recstatus: stopped'           => 'This showing was recorded but was stopped before recording was completed.',
    'recstatus: toomanyrecordings' => 'Too many recordings of this program have already been recorded.',
    'recstatus: tunerbusy'         => 'The tuner card was already being used when this program was scheduled to be recorded.',
    'recstatus: unknown'           => 'The status of this showing is unknown.',
    'recstatus: willrecord'        => 'This showing will be recorded.',
// includes/recording_schedules.php
    'Dup Method'                   => '',
    'Profile'                      => '',
    'Sub and Desc (Empty matches)' => '',
    'Type'                         => '',
    'rectype: finddaily'           => 'Find One Daily',
    'rectype: findweekly'          => 'Find One Weekly',
// includes/utils.php
    '$1 B'  => '',
    '$1 GB' => '',
    '$1 KB' => '',
    '$1 MB' => '',
    '$1 TB' => '',
// program_detail.php
    'Unknown Program.'            => '',
    'Unknown Recording Schedule.' => '',
// search.php
    'Please search for something.' => '',
// themes/.../canned_searches.php
    'handy: overview' => 'This page contains pre-prepared complex searches of the program listings.',
// themes/.../channel_detail.php
    'Length' => '',
    'Show'   => '',
    'Time'   => '',
// themes/.../music.php
    'Album'               => '',
    'Album (filtered)'    => '',
    'All Music'           => '',
    'Artist'              => '',
    'Artist (filtered)'   => '',
    'Displaying'          => '',
    'Duration'            => '',
    'End'                 => '',
    'Filtered'            => '',
    'Genre'               => '',
    'Genre (filtered)'    => '',
    'Music'               => '',
    'Next'                => '',
    'No Tracks Available' => '',
    'Previous'            => '',
    'Top'                 => '',
    'Track Name'          => '',
    'Unfiltered'          => '',
// themes/.../program_detail.php
    '$1 Rating'                           => '',
    'Back to the program listing'         => '',
    'Back to the recording schedules'     => '',
    'Cast'                                => '',
    'Directed by'                         => '',
    'Don\'t record this program.'         => '',
    'Exec. Producer'                      => '',
    'Find other showings of this program' => '',
    'Find showings of this program'       => '',
    'Google'                              => '',
    'Guest Starring'                      => '',
    'Hosted by'                           => '',
    'Presented by'                        => '',
    'Produced by'                         => '',
    'Program Detail'                      => '',
    'TV.com'                              => '',
    'Time Stretch Default'                => '',
    'What else is on at this time?'       => '',
    'Written by'                          => '',
// themes/.../program_listing.php
    'Currently Browsing:  $1' => '',
    'Jump To'                 => '',
    'Program Listing'         => '',
// themes/.../recorded_programs.php
    '$1 episode'                                          => '',
    '$1 episodes'                                         => '',
    '$1 recording'                                        => '',
    '$1 recordings'                                       => '',
    'Are you sure you want to delete the following show?' => '',
    'Delete'                                              => '',
    'Delete $1'                                           => '',
    'Delete + Rerecord'                                   => '',
    'Delete and rerecord $1'                              => '',
    'Show group'                                          => '',
    'Show recordings'                                     => '',
    'auto-expire'                                         => '',
    'file size'                                           => '',
    'has bookmark'                                        => '',
    'has commflag'                                        => '',
    'has cutlist'                                         => '',
    'is editing'                                          => '',
    'preview'                                             => '',
// themes/.../recording_profiles.php
    'Profile Groups'     => '',
    'Recording profiles' => '',
// themes/.../recording_schedules.php
    'Any'                                       => '',
    'No recording schedules have been defined.' => '',
    'channel'                                   => '',
    'profile'                                   => '',
    'transcoder'                                => '',
    'type'                                      => '',
// themes/.../schedule_manually.php
    'Save Schedule'     => '',
    'Schedule Manually' => '',
// themes/.../scheduled_recordings.php
    'Activate'      => '',
    'Commands'      => '',
    'Conflicts'     => '',
    'Deactivated'   => '',
    'Default'       => '',
    'Don\'t Record' => '',
    'Duplicates'    => '',
    'Forget Old'    => '',
    'Never Record'  => '',
    'Record This'   => '',
    'Scheduled'     => '',
// themes/.../search.php
    'No matches found' => '',
    'Search for:  $1'  => '',
// themes/.../settings.php
    'Channels'           => '',
    'Configure'          => '',
    'Key Bindings'       => '',
    'MythWeb Settings'   => '',
    'settings: overview' => 'This is the index page for the configuration settings...<p>It\'s incomplete, and will eventually get some nicer formatting.  For now, you can choose from the following:',
// themes/.../settings_channels.php
    'Configure Channels'                                                                                                                 => '',
    'Please be warned that by altering this table without knowing what you are doing, you could seriously disrupt mythtv functionality.' => '',
    'brightness'                                                                                                                         => '',
    'callsign'                                                                                                                           => '',
    'colour'                                                                                                                             => '',
    'commfree'                                                                                                                           => '',
    'contrast'                                                                                                                           => '',
    'delete'                                                                                                                             => '',
    'finetune'                                                                                                                           => '',
    'freqid'                                                                                                                             => '',
    'hue'                                                                                                                                => '',
    'name'                                                                                                                               => '',
    'recpriority'                                                                                                                        => '',
    'sourceid'                                                                                                                           => '',
    'videofilters'                                                                                                                       => '',
    'visible'                                                                                                                            => '',
// themes/.../settings_keys.php
    'Action'                => '',
    'Configure Keybindings' => '',
    'Context'               => '',
    'Destination'           => '',
    'Edit keybindings on'   => '',
    'JumpPoints Editor'     => '',
    'Key bindings'          => '',
    'Keybindings Editor'    => '',
    'Set Host'              => '',
// themes/.../settings_mythweb.php
    'Channel &quot;Jump to&quot;'     => '',
    'Date Formats'                    => '',
    'Guide Settings'                  => '',
    'Hour Format'                     => '',
    'Language'                        => '',
    'Listing &quot;Jump to&quot;'     => '',
    'Listing Time Key'                => '',
    'MythWeb Theme'                   => '',
    'Only display favourite channels' => '',
    'Reset'                           => '',
    'SI Units?'                       => '',
    'Scheduled Popup'                 => '',
    'Show descriptions on new line'   => '',
    'Status Bar'                      => '',
    'Weather Icons'                   => '',
    'format help'                     => '',
// themes/.../theme.php
    'Category Legend'                            => '',
    'Category Type'                              => '',
    'Edit MythWeb and some MythTV settings.'     => '',
    'Exact Match'                                => '',
    'HD Only'                                    => '',
    'Manually Schedule'                          => '',
    'MythMusic on the web.'                      => '',
    'MythVideo on the web.'                      => '',
    'MythWeb Weather.'                           => '',
    'Recording Schedules'                        => '',
    'Search fields'                              => '',
    'Search help'                                => '',
    'Search help: movie example'                 => '*** 1/2 Adventure',
    'Search help: movie search'                  => 'movie search',
    'Search help: regex example'                 => '/^Good Eats/',
    'Search help: regex search'                  => 'regex search',
    'Search options'                             => '',
    'Searches'                                   => '',
    'Settings'                                   => '',
    'TV functions, including recorded programs.' => '',
// themes/.../video.php
    'Edit'          => '',
    'Reverse Order' => '',
    'Videos'        => '',
    'category'      => '',
    'cover'         => '',
    'director'      => '',
    'imdb rating'   => '',
    'plot'          => '',
    'rating'        => '',
    'year'          => '',
// themes/.../weather.php
    ' at '               => '',
    'Current Conditions' => '',
    'Forecast'           => '',
    'Friday'             => '',
    'High'               => '',
    'Humidity'           => '',
    'Last Updated'       => '',
    'Low'                => '',
    'Monday'             => '',
    'Pressure'           => '',
    'Radar'              => '',
    'Saturday'           => '',
    'Sunday'             => '',
    'Thursday'           => '',
    'Today'              => '',
    'Tomorrow'           => '',
    'Tuesday'            => '',
    'UV Extreme'         => '',
    'UV High'            => '',
    'UV Index'           => '',
    'UV Minimal'         => '',
    'UV Moderate'        => '',
    'Visibility'         => '',
    'Weather'            => '',
    'Wednesday'          => '',
    'Wind'               => '',
    'Wind Chill'         => ''
// End of the translation hash ** Do not touch the next line
          );


/*
    Show Categories:
    $Categories is a hash of keys corresponding to the css style used for each
    show category.  Each entry is an array containing the name of that category
    in the language this file defines (it will not be translated separately),
    and a regular expression pattern used to match the category against those
    provided in the listings.
*/
$Categories = array();
$Categories['Action']         = array('Action',           '\\b(?:action|adven)');
$Categories['Adult']          = array('Adult',            '\\b(?:adult|erot)');
$Categories['Animals']        = array('Animals',          '\\b(?:animal|tiere)');
$Categories['Art_Music']      = array('Art_Music',        '\\b(?:art|dance|music|cultur)');
$Categories['Business']       = array('Business',         '\\b(?:biz|busine)');
$Categories['Children']       = array('Children',         '\\b(?:child|infan|animation)');
$Categories['Comedy']         = array('Comedy',           '\\b(?:comed|entertain|sitcom)');
$Categories['Crime_Mystery']  = array('Crime / Mystery',  '\\b(?:crim|myster)');
$Categories['Documentary']    = array('Documentary',      '\\b(?:doc)');
$Categories['Drama']          = array('Drama',            '\\b(?:drama)');
$Categories['Educational']    = array('Educational',      '\\b(?:edu|interests)');
$Categories['Food']           = array('Food',             '\\b(?:food|cook|drink)');
$Categories['Game']           = array('Game',             '\\b(?:game)');
$Categories['Health_Medical'] = array('Health / Medical', '\\b(?:health|medic)');
$Categories['History']        = array('History',          '\\b(?:hist)');
$Categories['Horror']         = array('Horror',           '\\b(?:horror)');
$Categories['HowTo']          = array('HowTo',            '\\b(?:how|home|house|garden)');
$Categories['Misc']           = array('Misc',             '\\b(?:special|variety|info|collect)');
$Categories['News']           = array('News',             '\\b(?:news|current)');
$Categories['Reality']        = array('Reality',          '\\b(?:reality)');
$Categories['Romance']        = array('Romance',          '\\b(?:romance)');
$Categories['SciFi_Fantasy']  = array('SciFi / Fantasy',  '\\b(?:fantasy|sci\\w*\\W*fi)');
$Categories['Science_Nature'] = array('Science / Nature', '\\b(?:science|nature|environment)');
$Categories['Shopping']       = array('Shopping',         '\\b(?:shop)');
$Categories['Soaps']          = array('Soaps',            '\\b(?:soaps)');
$Categories['Spiritual']      = array('Spiritual',        '\\b(?:spirit|relig)');
$Categories['Sports']         = array('Sports',           '\\b(?:sport)');
$Categories['Talk']           = array('Talk',             '\\b(?:talk)');
$Categories['Travel']         = array('Travel',           '\\b(?:travel)');
$Categories['War']            = array('War',              '\\b(?:war)');
$Categories['Western']        = array('Western',          '\\b(?:west)');

// These are some other classes that we might want to have show up in the
//   category legend (they don't need regular expressions)
$Categories['Unknown']        = array('Unknown');
$Categories['movie']          = array('Movie'  );

?>
