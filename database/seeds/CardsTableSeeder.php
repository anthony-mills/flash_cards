<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cards')->delete();

        \DB::table('cards')->insert(array (
            0 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-19 11:07:49',
                'difficulty' => 1,
                'id' => 1,
                'problem' => 'The lowest cost EC2 instance type for general purpose workloads?',
                'solution' => 'The T2 family.',
                'updated_at' => '2020-07-12 05:10:25',
            ),
            1 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-19 11:13:13',
                'difficulty' => 1,
                'id' => 2,
                'problem' => 'Maximum size of an AWS S3 object?',
                'solution' => '5TB is the maximum size for an S3 object.',
                'updated_at' => '2020-07-12 05:11:08',
            ),
            2 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-19 11:18:35',
                'difficulty' => 1,
                'id' => 3,
                'problem' => 'What does S3 stand for?',
                'solution' => 'Simple Storage Service',
                'updated_at' => '2020-07-12 05:14:21',
            ),
            3 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-19 11:21:23',
                'difficulty' => 1,
                'id' => 4,
                'problem' => 'What are the 5 pillars of the AWS well architected framework?',
                'solution' => '1. Operational Excellence
<br>2. Security
<br>3. Reliability
<br>4. Performance Efficiency
<br>5. Cost Optimisation<br><br>More information can be found in the <a href="https://wa.aws.amazon.com/wat.pillars.wa-pillars.en.html" target="_blank">AWS documentation</a>.',
                'updated_at' => '2020-04-29 06:31:26',
            ),
            4 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-19 11:55:39',
                'difficulty' => 1,
                'id' => 5,
                'problem' => 'What is the smallest possible file size for an Amazon S3 object?',
                'solution' => 'The smallest possible object size with S3 is 0 bytes.',
                'updated_at' => '2020-04-19 11:55:39',
            ),
            5 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 04:19:20',
                'difficulty' => 4,
                'id' => 6,
                'problem' => 'What are the main attributes of a "Clustered" placement group?',
                'solution' => 'All EC2 instances are provisioned in the same availability zone. Use for applications requiring low network latency or high network throughput.',
                'updated_at' => '2020-04-21 04:19:20',
            ),
            6 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 04:21:57',
                'difficulty' => 4,
                'id' => 7,
                'problem' => 'What are the attributes of the "Spread" placement group?',
                'solution' => 'Strictly places a small group of instances across distinct underlying hardware to reduce correlated failures.

A spread placement group can also span multiple availability zones.',
                'updated_at' => '2020-04-21 04:21:57',
            ),
            7 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 04:22:28',
                'difficulty' => 4,
                'id' => 8,
                'problem' => 'How many types of instance "placement groups" are there?',
                'solution' => 'Three',
                'updated_at' => '2020-04-22 03:53:00',
            ),
            8 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 04:27:27',
                'difficulty' => 4,
                'id' => 9,
                'problem' => 'What are the attributes of "partition" placement group?',
                'solution' => 'Instances are grouped into "partitions" of related instances. Each partition is hosted on separate underlying hardware from the other partitions.',
                'updated_at' => '2020-04-21 04:27:27',
            ),
            9 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 06:25:00',
                'difficulty' => 4,
                'id' => 11,
                'problem' => '<p>What type of instances can be placed into an "instance placement group"?</p>',
                'solution' => '<p>Instances from the following families can be added to placement groups:</p><br/>
<ul><li>General purpose</li><li>Compute optimized</li><li>Memory optimized</li><li>Storage optimized</li><li>Accelerated computing        </li></ul><br/><p>Full details can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html#placement-groups-limitations-cluster" target="_blank">Amazon docs</a>.</p>',
                'updated_at' => '2020-04-21 06:25:00',
            ),
            10 =>
            array (
                'category' => 4,
                'created_at' => '2020-04-21 06:35:50',
                'difficulty' => 3,
                'id' => 12,
            'problem' => '<p>What other AWS services can the web application firewall ( WAF ) be used with?</p>',
            'solution' => '<p>The AWS WAF service can be used with the following services:</p><br/><ul><li>Cloudfront</li><li>Application Load Balancer ( ALB )</li><li>API Gateway</li></ul><br/><p>More details can be found in the <a href="https://aws.amazon.com/waf/faqs/" target="_blank">WAF FAQ</a>.</p>',
                'updated_at' => '2020-04-21 06:35:50',
            ),
            11 =>
            array (
                'category' => 4,
                'created_at' => '2020-04-21 06:37:09',
                'difficulty' => 3,
                'id' => 13,
                'problem' => '<p>What level of the OSI network model does the AWS WAF service operate at?</p>',
                'solution' => '<p>Level 7 - Application.</p>',
                'updated_at' => '2020-04-21 06:37:09',
            ),
            12 =>
            array (
                'category' => 4,
                'created_at' => '2020-04-21 06:43:31',
                'difficulty' => 4,
                'id' => 14,
                'problem' => '<p>Requests blocked by the AWS WAF are returned what HTTP status code?</p>',
                'solution' => '<p>Blocked requests are returned a <a href="https://en.wikipedia.org/wiki/HTTP_403" target="_blank">403 - Forbidden</a> response.</p>',
                'updated_at' => '2020-04-21 06:43:31',
            ),
            13 =>
            array (
                'category' => 4,
                'created_at' => '2020-04-21 06:46:47',
                'difficulty' => 3,
                'id' => 15,
                'problem' => '<p>What are the three behaviors are available for requests in the AWS WAF service?&nbsp;</p>',
                'solution' => '<p>1. Block all requests except for those specified.</p><br/><p>2. Allow all requests except for those specified.</p><br/><p>3. Count the number of requests matching a specified rule.</p>',
                'updated_at' => '2020-04-21 06:46:47',
            ),
            14 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 22:32:52',
                'difficulty' => 3,
                'id' => 16,
                'problem' => '',
                'solution' => '<ul><li>On Demand</li><li>Reserved</li><li>Spot</li><li>Dedicated Hosts</li><li>Savings Plans</li></ul><br /><p>More information on each can be found on the <a href="https://aws.amazon.com/ec2/pricing/" target="_blank">E2 pricing page</a>.</p>',
                'updated_at' => '2020-04-21 22:32:52',
            ),
            15 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 22:42:34',
                'difficulty' => 2,
                'id' => 17,
                'problem' => '<p>If a Spot EC2 instance is terminated by AWS after running for less than an hour. How will you be billed for the usage?</p>',
                'solution' => '<p>You only be charged for a partial hour of usage as the instance was terminated by AWS.<br><br>But if you terminate the instance yourself you will be charged the full hour usage.<br><br>More information on how EC2 spot instances are billed can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-interruptions.html#billing-for-interrupted-spot-instances" target="_blank">user guide</a>.</p>',
                'updated_at' => '2020-04-21 22:42:34',
            ),
            16 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 22:52:13',
                'difficulty' => 2,
                'id' => 18,
                'problem' => '<p>What happens to the volume on an EBS backed instance, when the EC2 instance is terminated?</p>',
                'solution' => '<p>By default the EBS volume will also be deleted unless the&nbsp;<font color="#f60e0e" style="">createDeletionOnTermination</font> flag is set to false.<br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/terminating-instances.html#preserving-volumes-on-termination" target="_blank">AWS Documentation</a>.</p>',
                'updated_at' => '2020-04-21 22:52:13',
            ),
            17 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 22:58:15',
                'difficulty' => 2,
                'id' => 19,
                'problem' => '<p>Can you encrypt the root EBS volume of an EC2 instance?</p>',
                'solution' => '<p>Yes encryption is now available on root volumes as well as other EBS volumes that are not used for boot.<br><br>You can find more details on the <a href="https://aws.amazon.com/about-aws/whats-new/2019/05/with-a-single-setting-you-can-encrypt-all-new-amazon-ebs-volumes/" target="_blank">AWS blog</a> or <a href="https://aws.amazon.com/ebs/features/#Amazon_EBS_encryption_and_AWS_Identity_and_Access_Management" target="_blank">documentation</a>.</p>',
                'updated_at' => '2020-04-21 22:58:15',
            ),
            18 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 23:04:36',
                'difficulty' => 3,
                'id' => 20,
                'problem' => '<p>With an EC2 security group what traffic is allowed by default?</p>',
                'solution' => '<p>All inbound traffic is denied.<br></p><p><br>All outbound traffic from instances in the security group is allowed.</p>
<br />
<p>More details can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-security-groups.html#security-group-rules" target="_blank">AWS documentation</a>.</p>',
                'updated_at' => '2020-04-21 23:04:36',
            ),
            19 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-21 11:06:10',
                'difficulty' => 2,
                'id' => 21,
                'problem' => '<p>How long do you need to wait for a change to a security group to take effect?&nbsp;</p>',
                'solution' => '<p>All changes made to security groups take effect immediately.</p>',
                'updated_at' => '2020-04-21 11:06:10',
            ),
            20 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 23:17:06',
                'difficulty' => 3,
                'id' => 22,
                'problem' => '<p>Are EC2 security groups "Stateful" or "Stateless"?</p>',
                'solution' => '<p>Security groups are considered stateful unlike VPC NACLs that require ports open for both inbound and outbound traffic.<br><br>More information on security groups can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_SecurityGroups.html#VPCSecurityGroups" target="_blank">VPC documentation</a>.</p>',
                'updated_at' => '2020-04-21 23:17:06',
            ),
            21 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 23:23:58',
                'difficulty' => 3,
                'id' => 23,
                'problem' => '<p>How can you block an IP address using EC2 security groups?</p>',
                'solution' => '<p>You cannot block requests via IP address using a security group. </p><p>A VPC NACL or AWS WAF rule must be used instead. Security Groups only allow the flow of inbound traffic they do not deny it.</p><p><br></p>',
                'updated_at' => '2020-04-21 23:23:58',
            ),
            22 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 23:38:46',
                'difficulty' => 3,
                'id' => 24,
                'problem' => '<p>What are the three types of network interface available for an EC2 instance?</p>',
            'solution' => '<ul><li>Elastic Network Adapter - ENI: Used for general purpose networking ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html" target="_blank">more information</a> ).<br><br></li><li>Enhanced networking - EN: Offers high speed network performance between 10 - 100 Gps ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/enhanced-networking.html" target="_blank">more information</a> ).<br><br></li><li>Elastic Fabric Connector ENA - Used to accelerate High Performance Computing (HPC) and machine learning applications ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/efa.html" target="_blank">more information</a> ).</li></ul>',
                'updated_at' => '2020-04-21 23:38:46',
            ),
            23 =>
            array (
                'category' => 2,
                'created_at' => '2020-04-21 23:46:56',
                'difficulty' => 4,
                'id' => 25,
                'problem' => '<p>How do you retrieve metadata about a running instance?</p>',
                'solution' => '<p>Execute <strong>curl http://169.254.169.254/latest/meta-data/</strong> from your instance or install the instance metadata tool.</p>

<br />
<p>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instancedata-data-retrieval.html" target="_blank">AWS documentation</a>.</span></p>',
                'updated_at' => '2020-04-21 23:46:56',
            ),
            24 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-21 12:04:13',
                'difficulty' => 4,
                'id' => 26,
                'problem' => 'Can an EC2 placement group cover multiple availability zones?',
                'solution' => '<p>Yes, for Partitioned and Spread placement groups but Clustered placement groups cannot.<br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html" target="_blank">AWS documentation</a>.</p>',
                'updated_at' => '2020-04-21 12:04:13',
            ),
            25 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 03:36:50',
                'difficulty' => 2,
                'id' => 27,
                'problem' => '<p>What performance advantage does AWS Aurora offer over a standard MySQL database? </p>',
                'solution' => '<p>AWS Aurora offers <b>5 times</b> the performance of a standard MySQL instance on similar hardware.<br><br><br>More details can <a href="https://aws.amazon.com/rds/aurora/mysql-features/#High_Performance_and_Scalability" target="_blank">be found here</a>.</p>',
                'updated_at' => '2020-06-13 03:28:48',
            ),
            26 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 03:39:13',
                'difficulty' => 2,
                'id' => 28,
                'problem' => '<p>What performance advantage does AWS Aurora offer over a standard Postgres database?</p>',
                'solution' => '<p>AWS Aurora offers <b>3 times</b> the performance of a standard Postgres instance on similar hardware.<br><br><br>More details can&nbsp;<a href="https://aws.amazon.com/rds/aurora/postgresql-features/#High_Performance_and_Scalability" target="_blank">be found here</a>.</p>',
                'updated_at' => '2020-06-13 04:47:29',
            ),
            27 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 03:43:49',
                'difficulty' => 2,
                'id' => 29,
                'problem' => '<p>What are the minimum and maximum storage limits of an Aurora Database?</p>',
                'solution' => '<p>The minimum is 10GB, scaling in increments of 10GB. To a maximum size of 64TB.</p><p><br></p><p>More information on <a href="https://aws.amazon.com/rds/aurora/faqs/#Hardware_and_Scaling" target="_blank">Aurora Database constraints can be found here</a>.&nbsp;</p>',
                'updated_at' => '2020-04-23 03:43:49',
            ),
            28 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 03:49:52',
                'difficulty' => 3,
                'id' => 30,
                'problem' => '<p>With the AWS Aurora engine how many copies are your data are there?</p>',
                'solution' => '<p>Aurora keeps 6 copies of your data. With 2 copies of your data stored in each availability zone, across a minimum of 3 availability zones.<br><br>More information on the duplication of <a href="https://aws.amazon.com/rds/aurora/faqs/#High_Availability_and_Replication" target="_blank">partition data can be found in the Aurora FAQ</a>.</p>',
                'updated_at' => '2020-04-23 03:49:52',
            ),
            29 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 03:57:50',
                'difficulty' => 3,
                'id' => 32,
                'problem' => '<p>How does Aurora database engine "self heal"?</p>',
                'solution' => '<p>Data blocks and disks are continuously scanned for <a href="https://aws.amazon.com/rds/aurora/faqs/#High_Availability_and_Replication" target="_blank">errors and repaired as needed</a>.</p>',
                'updated_at' => '2020-04-23 03:57:50',
            ),
            30 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 04:04:57',
                'difficulty' => 4,
                'id' => 33,
                'problem' => '<p>What is the maximum number of Aurora Read Replicas?</p>',
                'solution' => '<p>To improve read performance your database may have up to 15 read replicas. <br><br>The Aurora engine also supports "cross region" replicas.</p><p><br></p><p>More information can be <a href="https://aws.amazon.com/rds/aurora/postgresql-features/#Low-Latency_Read_Replicas" target="_blank">found on the Aurora FAQ</a>.</p>',
                'updated_at' => '2020-04-23 04:05:30',
            ),
            31 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 04:09:30',
                'difficulty' => 3,
                'id' => 34,
                'problem' => '<p>How many read replicas are available when using the MySQL database engine?</p>',
                'solution' => '<p>You can have a maximum of 5 MySQL read replicas.</p><p><br></p><p>&nbsp;</p>',
                'updated_at' => '2020-04-23 04:09:30',
            ),
            32 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 04:17:29',
                'difficulty' => 4,
                'id' => 35,
                'problem' => '<p>What is Amazon Aurora Serverless?</p>',
                'solution' => '<p>Aurora Serverless is an on demand auto scaling system for MySQL and Postgres databases.</p><p><br></p><p>It offers a pay as you go database system for variable or infrequent workloads.</p><p><br></p><p>More information on <a href="https://aws.amazon.com/rds/aurora/serverless/" target="_blank">Aurora Serverless can be found here</a>.</p>',
                'updated_at' => '2020-04-23 04:18:46',
            ),
            33 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-23 08:00:22',
                'difficulty' => 4,
                'id' => 36,
                'problem' => '<p>What is the default data retention period for backups on Redshift?</p>',
                'solution' => '<p>The default is <u>1 day</u>.</p><p><br></p><p>More details can be found in the <a href="https://aws.amazon.com/redshift/faqs/#Backup_and_restore" target="_blank">Redshift FAQ</a>.</p>',
                'updated_at' => '2020-06-13 06:51:40',
            ),
            34 =>
            array (
                'category' => 6,
                'created_at' => '2020-04-24 04:48:15',
                'difficulty' => 2,
                'id' => 38,
                'problem' => '<p>What are the two types of Elasticache engine available?</p>',
                'solution' => '<p>Memcached and Redis&nbsp;</p>',
                'updated_at' => '2020-04-24 04:48:15',
            ),
            35 =>
            array (
                'category' => 6,
                'created_at' => '2020-04-24 04:52:16',
                'difficulty' => 3,
                'id' => 39,
                'problem' => '<p>What Elasticache engine would I use if your application needed the redundancy of MultiAZ support?&nbsp;</p>',
                'solution' => '<p>Redis.</p>',
                'updated_at' => '2020-04-24 04:52:16',
            ),
            36 =>
            array (
                'category' => 6,
                'created_at' => '2020-04-24 04:53:25',
                'difficulty' => 3,
                'id' => 40,
                'problem' => '<p>What Elasticache back-end supports a multi-threaded architecture for high performance?</p>',
                'solution' => '<p>Memcached.</p>',
                'updated_at' => '2020-04-24 04:53:25',
            ),
            37 =>
            array (
                'category' => 6,
                'created_at' => '2020-04-24 04:55:47',
                'difficulty' => 3,
                'id' => 41,
                'problem' => '<p>What Elasticache engine would you use for snapshots and replication?</p>',
                'solution' => '<p>Redis.<br><br><br>More information <a href="https://aws.amazon.com/elasticache/redis-vs-memcached/#Snapshots" target="_blank">can be found here</a>.</p>',
                'updated_at' => '2020-04-24 04:55:47',
            ),
            38 =>
            array (
                'category' => 6,
                'created_at' => '2020-04-24 04:59:54',
                'difficulty' => 3,
                'id' => 42,
                'problem' => '<p>What Elasticache engine would you used if your application required support for advanced data types, such as lists and sorted sets?</p>',
                'solution' => '<p>In addition to standard strings the Redis supports lists, sets, sorted sets, hashes, bit arrays, and hyperlog logs.<br><br><br>More information can be found in the <a href="https://aws.amazon.com/elasticache/redis-vs-memcached/#Advanced_data_structures" target="_blank">AWS documentation</a>.</p>',
                'updated_at' => '2020-04-24 04:59:54',
            ),
            39 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:05:31',
                'difficulty' => 1,
                'id' => 43,
                'problem' => '<p>What is the name of the Amazon AWS hosted DNS service?</p>',
                'solution' => '<p>Route 53.<br><br></p><p>More information can be found in the route <a href="https://aws.amazon.com/route53/" target="_blank">53 documentation</a>.</p>',
                'updated_at' => '2020-04-24 05:05:31',
            ),
            40 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:20:20',
                'difficulty' => 2,
                'id' => 44,
                'problem' => '<p>What is the purpose of "Alias" records?</p>',
                'solution' => '<p>Alias records are used to map an address to an AWS resource like an ALB, and S3 bucket etc.<br><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/resource-record-sets-choosing-alias-non-alias.html" target="_blank">Route 53 documentation</a>.<br><br></p>',
                'updated_at' => '2020-04-24 05:20:20',
            ),
            41 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:25:42',
                'difficulty' => 3,
                'id' => 45,
                'problem' => '<p>What two types of Route 53 record can be used to map a resource to the zone apex record?</p>',
            'solution' => '<p>An A record or and Alias must be used for mapping resources to the Zone Apex record ( or domain root ).<br></p><p><br>More information can be found in the <a href="https://docs.aws.amazon.com/govcloud-us/latest/UserGuide/setting-up-route53-zoneapex-elb.html" target="_blank">Route 53 documentation</a>.</p>',
                'updated_at' => '2020-04-24 05:25:42',
            ),
            42 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:30:13',
                'difficulty' => 2,
                'id' => 46,
                'problem' => '<p>What&nbsp; is the purpose of a SOA record?</p>',
                'solution' => '<p>An SOA record holds high level information about a DNS zone.<br><br><br>More details on <a href="https://en.wikipedia.org/wiki/SOA_record" target="_blank">SOA records can be found here.</a></p>',
                'updated_at' => '2020-04-24 05:30:13',
            ),
            43 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:32:58',
                'difficulty' => 2,
                'id' => 47,
                'problem' => '<p>What is the purpose of an A record?</p>',
                'solution' => '<p>An A record maps a host-name to a destination IP address.<br><br></p><p>More information can be found in <a href="https://tools.ietf.org/html/rfc1035" target="_blank">RFC 1035</a>.</p>',
                'updated_at' => '2020-04-24 05:32:58',
            ),
            44 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 05:42:22',
                'difficulty' => 2,
                'id' => 48,
                'problem' => '<p>What is the purpose of a DNS MX record?&nbsp;</p>',
                'solution' => '<p>An MX record is used to map email servers to a domain.<br><br><br>More information can be <a href="https://tools.ietf.org/html/rfc7505" target="_blank">found in RFC-7505</a>.</p>',
                'updated_at' => '2020-04-24 05:42:22',
            ),
            45 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-24 06:53:24',
                'difficulty' => 3,
                'id' => 49,
                'problem' => '<p>If you have a record using a "simple routing policy" and multiple IP addresses, what IP address is returned when queried?</p>',
                'solution' => '<p>When more than one iP address exists records are returned by random with the simple routing policy.<br><br><br>More information about the available routing policies can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-policy.html" target="_blank">Route 53 documentation</a>.</p>',
                'updated_at' => '2020-04-24 06:53:24',
            ),
            46 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 02:11:07',
                'difficulty' => 3,
                'id' => 50,
                'problem' => 'What does "latency based" routing work?',
                'solution' => '<p>Latency based routing will redirect a client to a region of your AWS infrastructure that offers them the lowest latency.</p><p><br>More information can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-policy.html#routing-policy-latency" target="_blank">Route 53 documentation</a>.&nbsp;</p>',
                'updated_at' => '2020-04-25 02:13:31',
            ),
            47 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 02:20:23',
                'difficulty' => 3,
                'id' => 51,
                'problem' => '<p>What is a "fail over" routing policy?</p>',
                'solution' => '<p>A fail over routing policy allows you to redirect traffic to an alternative resource if the the primary resources becomes unavailable.<br><br><br>More information on fail over routing can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-policy.html#routing-policy-latency" target="_blank">Route 53 documentation</a>.</p>',
                'updated_at' => '2020-04-25 02:20:23',
            ),
            48 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 02:28:29',
                'difficulty' => 3,
                'id' => 52,
                'problem' => '<p>What is a geolocation policy used for?</p>',
                'solution' => '<p>A geolocation routing policy allows to to control what resource clients are sent to based on the geographical location.<br></p><p><br>If an IP address cannot be mapped to a geographical location, you can set a "default" response. If no default is set the client will receive a "no answer" response.<br></p><p><br>More details can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-policy.html#routing-policy-geo" target="_blank">Route 53 documentation</a>.</p>',
                'updated_at' => '2020-04-25 02:28:29',
            ),
            49 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 02:41:20',
                'difficulty' => 3,
                'id' => 53,
                'problem' => '<p>How does the multi value answer policy differ from simple routing?</p>',
                'solution' => '<p>Multi value routing allows you to return multiple hosts for each record but also allows you to associate health checks for the included hosts. <br><br><br>All possible hosts will be returned if there is less than 8 values.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-policy.html#routing-policy-multivalue" target="_blank">Route 53 documentation</a>.</p>',
                'updated_at' => '2020-04-25 02:41:20',
            ),
            50 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 02:51:45',
                'difficulty' => 4,
                'id' => 54,
            'problem' => '<p>How do you find the IP address for one of your elastic load balancers ( ELB )?</p>',
                'solution' => '<p>The IPv4 address used by an ELB can change at anytime, so you must resolve them via their DNS host name. <br><br><br>A DNS lookup on an ELB host name will return multiple IP addresses.<br><br><br>More information can be found in the <a href="https://aws.amazon.com/articles/best-practices-in-evaluating-elastic-load-balancing/" target="_blank">AWS documentation</a>.<br><br><br></p>',
                'updated_at' => '2020-04-25 02:51:45',
            ),
            51 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 03:03:19',
                'difficulty' => 3,
                'id' => 55,
                'problem' => '<p>By default how many domains can you manage in Route 53?</p>',
                'solution' => '<p>By default 50 domains but this limit can be increased by contacting AWS support.<br><br><br>For more information please look at the <a href="https://aws.amazon.com/route53/faqs/" target="_blank">Route 53 FAQ</a>.</p>',
                'updated_at' => '2020-04-25 03:03:19',
            ),
            52 =>
            array (
                'category' => 7,
                'created_at' => '2020-04-25 03:06:37',
                'difficulty' => 3,
                'id' => 56,
                'problem' => '<p>How many hosted zones can I create in AWS Route 53 by default?</p>',
                'solution' => '<p>You can have a maximum of 500 hosted zones and 10,000 record sets. This limit may be increased after lodging a request with AWS support.<br><br><br>More information can be found in the <a href="https://aws.amazon.com/route53/faqs/" target="_blank">Route 53 FAQ</a>.</p>',
                'updated_at' => '2020-04-25 03:06:37',
            ),
            53 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 06:33:25',
                'difficulty' => 4,
                'id' => 57,
                'problem' => '<p>What is the smallest CIDR block of IP addresses you can have in an Amazon VPC?</p>',
                'solution' => '<p>The smallest CIDR block is /28 or 16 IP addresses.<br><br>For more detail refer to the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#VPC_Sizing" target="_blank">AWS VPS user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-25 06:33:25',
            ),
            54 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 06:33:25',
                'difficulty' => 4,
                'id' => 58,
                'problem' => '<p>What is the largest CIDR block of IP addresses you can configure in an Amazon VPC?</p>',
                'solution' => '<p>The largest CIDR block is /16 or 65536 IP addresses.<br><br>For more detail refer to the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#VPC_Sizing" target="_blank">AWS VPS user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-25 06:35:05',
            ),
            55 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 06:39:53',
                'difficulty' => 4,
                'id' => 59,
                'problem' => '<p>What is the purpose of "VPC peering"?</p>',
                'solution' => '<p>VPC Peering allows the connection of two VPC\'s together, allowing traffic to be privately routed between the two.<br><br><br>See the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-peering.html" target="_blank">VPC user guide</a> for more details.</p>',
                'updated_at' => '2020-04-25 06:39:53',
            ),
            56 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 06:44:28',
                'difficulty' => 3,
                'id' => 60,
                'problem' => '<p>What is an IGW?</p>',
                'solution' => '<p>An IGW is an "Internet Gateway" which allows&nbsp; communication from a VPC to other VPC\'s along with the greater Internet.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Internet_Gateway.html" target="_blank">AWS VPC documentation</a>.</p>',
                'updated_at' => '2020-04-25 06:44:28',
            ),
            57 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 06:44:56',
                'difficulty' => 2,
                'id' => 61,
                'problem' => '<p>What does VPC stand for?</p>',
                'solution' => '<p>Virtual Private Cloud.</p>',
                'updated_at' => '2020-04-25 06:44:56',
            ),
            58 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 21:42:33',
                'difficulty' => 3,
                'id' => 62,
                'problem' => '<p>How can you configure a VPC subnet to span multiple availability zones?</p>',
                'solution' => '<p>It\'s not possible, each subnet must reside
entirely within one Availability Zone and cannot span zones.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html" target="_blank">AWS VPC user guide</a>.</p>',
                'updated_at' => '2020-04-25 21:42:58',
            ),
            59 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 21:47:40',
                'difficulty' => 4,
                'id' => 63,
                'problem' => '<p>When configuring a subnet CIDR block how many IP addresses are reserved by AWS?&nbsp;</p>',
                'solution' => '<p>5, the first four of the block and the broadcast address.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-25 21:47:40',
            ),
            60 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 21:51:49',
                'difficulty' => 4,
                'id' => 64,
                'problem' => '<p>What IP address is the DNS server in a VPC subnet?</p>',
                'solution' => '<p>The DNS server is the base of the CIDR block plus 2. So for the CIDR range 192.168.0.0/24, the AWS DNS service will be available at 192.168.0.2.<br><br><br>More information can be found in the VPC and subnet sizing section of the&nbsp;<a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#VPC_Sizing" target="_blank">AWS VPC user guide</a>.</p>',
                'updated_at' => '2020-04-25 21:51:49',
            ),
            61 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 22:00:57',
                'difficulty' => 3,
                'id' => 65,
                'problem' => '<p>What two services are used to increase security in a VPC?</p>',
            'solution' => '<p>Security groups and NACL\'s ( Network access control lists ).<br><br><br>More information on securing a VPC can be <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#SubnetSecurity" target="_blank">found in the user guide</a>.</p>',
                'updated_at' => '2020-04-25 22:00:57',
            ),
            62 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 21:51:49',
                'difficulty' => 3,
                'id' => 66,
                'problem' => '<p>What IP address is the VPC router in a subnet?</p>',
                'solution' => '<p>The DNS server is the base of the CIDR block plus 1. So for the CIDR range 192.168.1.0/24, the AWS DNS service will be located at 192.168.1.1.<br><br><br>More information can be found in the VPC and subnet sizing section of the&nbsp;<a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Subnets.html#VPC_Sizing" target="_blank">AWS VPC user guide</a>.</p>',
                'updated_at' => '2020-04-25 21:51:49',
            ),
            63 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 22:30:51',
                'difficulty' => 3,
                'id' => 67,
                'problem' => '<p>What is the maximum number of Internet Gateways you can have attached to a VPC?</p>',
            'solution' => '<p>You can only have a single IGW ( Internet Gateway ) attached to a VPC at time.</p><p><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Internet_Gateway.html" target="_blank">user guide on managing Internet Gateways</a>.</p>',
                'updated_at' => '2020-04-25 22:30:51',
            ),
            64 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 22:43:23',
                'difficulty' => 4,
                'id' => 68,
                'problem' => '<p>On creating a VPC what other related assets are created by default?&nbsp;</p>',
            'solution' => '<p>A route table, security group and Network Access Control List ( NACL) are created by default when a VPC is created.<br><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/how-it-works.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-25 22:43:23',
            ),
            65 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-25 23:02:37',
                'difficulty' => 3,
                'id' => 69,
                'problem' => '<p>Availability zone\'s are the same across accounts? <br><br></p><p>e.g ap-southeast-2a in one account is always the same as the ap-southeast-2a availability zone in a different account.</p>',
                'solution' => '<p>False, to control resource utilisation across availability zones. Availability Zone names are randomised between AWS accounts.<br><br><br>More information on availability zones can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-availability-zones" target="_blank">EC2 user guide</a>.</p>',
                'updated_at' => '2020-04-25 23:05:24',
            ),
            66 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:27:54',
                'difficulty' => 3,
                'id' => 70,
                'problem' => '<p>What are some of the advantages using a NAT gateway instead of a NAT instance in your VPC?</p>',
                'solution' => '<p>A NAT gateway is a managed highly available service that is optimised for routing traffic. <br><br><br>A NAT instance is an EC2 instance you must manage, its not highly available and performance will vary according to the instance type.<br><br><br>For a full comparison see this page in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-comparison.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 07:27:54',
            ),
            67 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:34:31',
                'difficulty' => 3,
                'id' => 71,
                'problem' => '<p>How do you set up NAT for IPv6 in your VPC?</p>',
                'solution' => '<p>NAT is not supported for IPv6, for Internet connectivity over IPv6 in your VPC you must use an "egress only gateway".<br><br><br>More details on egress only gateways can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/egress-only-internet-gateway.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 07:34:31',
            ),
            68 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:37:52',
                'difficulty' => 3,
                'id' => 72,
                'problem' => '<p>When setting up a NAT gateway what change needs to be made to your EC2 instance to allow traffic forwarding?</p>',
                'solution' => '<p>You must disable "source / destination checks" on the EC2 instance.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_NAT_Instance.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 07:37:52',
            ),
            69 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:47:05',
                'difficulty' => 3,
                'id' => 73,
                'problem' => '<p>For a NAT instance to work, where must it be placed in your VPC?</p>',
                'solution' => '<p>A NAT instance must be placed within a public subnet.<br><br><br>More details on NAT instances can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_NAT_Instance.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 07:47:05',
            ),
            70 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:51:56',
                'difficulty' => 4,
                'id' => 74,
                'problem' => '<p>What is the maximum throughput available from a NAT gateway?</p>',
                'solution' => '<p>A NAT gateway can offer speeds between 5 - 45Gbps.<br><br><br>More information of NAT gateways can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">VPC user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 07:51:56',
            ),
            71 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:54:55',
                'difficulty' => 3,
                'id' => 75,
                'problem' => '<p>How do you remove an elastic IP address from a NAT gateway in your VPC?</p>',
                'solution' => '<p>Once an IP address has been associated with a NAT gateway it cannot be removed.<br><br><br>More information on NAT gateways <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">can be found here.</a></p>',
                'updated_at' => '2020-04-26 07:54:55',
            ),
            72 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 07:56:27',
                'difficulty' => 3,
                'id' => 76,
                'problem' => '<p>What protocols are supported by a NAT gateway?</p>',
                'solution' => '<p>A NAT gateway can transport TCP, UDP and ICMP traffic.<br><br><br>More information on NAT Gateways can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 07:56:27',
            ),
            73 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-26 08:00:16',
                'difficulty' => 4,
                'id' => 77,
                'problem' => '<p>Can a NAT gateway be used by instances located in a separate VPC. But linked to the NAT gateway\'s own VPC using VPC peering?</p>',
                'solution' => '<p>No the instances will need their own NAT gateway to communicate with the greater Internet. They cannot leverage a gateway outside of their own VPC.<br><br><br>More details on VPC gateways can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:00:16',
            ),
            74 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 08:03:08',
                'difficulty' => 3,
                'id' => 78,
                'problem' => '<p>What is the maximum number of NAT gateways you can have per AZ?</p>',
                'solution' => '<p>You can have up to 5 NAT gateways in an availability zone at a time.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/amazon-vpc-limits.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:03:08',
            ),
            75 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 08:04:34',
                'difficulty' => 3,
                'id' => 79,
                'problem' => '<p>How may Egress Only Gateways for&nbsp; routing IPv6 are you allowed per region?</p>',
                'solution' => '<p>You can have up to 5&nbsp; Egress Only Gateways per region.</p><p><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/amazon-vpc-limits.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:04:34',
            ),
            76 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 08:06:55',
                'difficulty' => 4,
                'id' => 80,
                'problem' => '<p>How many rules can you have in a NACL?</p>',
                'solution' => '<p>You can have a maximum of 20 rules in a NACL.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/amazon-vpc-limits.html#vpc-limits-enis" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:06:55',
            ),
            77 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 08:06:55',
                'difficulty' => 4,
                'id' => 81,
                'problem' => '<p>How many NACL\'s can you have in a VPC?</p>',
                'solution' => '<p>You can have a maximum of 200 rules in a NACL.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/amazon-vpc-limits.html#vpc-limits-enis" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:08:27',
            ),
            78 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 08:11:29',
                'difficulty' => 3,
                'id' => 82,
                'problem' => '<p>How many peering connections can you have to a VPC?</p>',
                'solution' => '<p>By default you can have up to 50 with a maximum of 125.<br><br><br>You can find more details in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/amazon-vpc-limits.html#vpc-limits-peering" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 08:11:29',
            ),
            79 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 21:45:36',
                'difficulty' => 3,
                'id' => 83,
                'problem' => '<p>What is a NACL?</p>',
            'solution' => '<p>A Network Access Control List ( or NACL ) is a set of rules that control traffic in and out of your VPC subnets.<br><br><br>More information on <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html" target="_blank">Network Access Control Lists can be found here</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 21:45:36',
            ),
            80 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 21:56:36',
                'difficulty' => 3,
                'id' => 84,
                'problem' => '<p>What traffic does a custom NACL allow by default?</p>',
                'solution' => '<p>By default a NACL will deny all inbound and outbound traffic by default.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#nacl-basics" target="_blank">NACL user guide</a>.</p>',
                'updated_at' => '2020-04-26 21:56:36',
            ),
            81 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:04:03',
                'difficulty' => 4,
                'id' => 85,
                'problem' => '<p>What is the highest numbered rule you can have in a NACL?</p>',
                'solution' => '<p>Rules can be numbered up to 32766. <br><br><br>AWS recommends creating rules in increments of 100 to offer flexibility if changes need to be made to the rule set.<br><br></p><p>More details can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#nacl-basics" target="_blank">NACL user guide</a>.<br><br><br></p>',
                'updated_at' => '2020-04-26 22:04:03',
            ),
            82 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:08:12',
                'difficulty' => 3,
                'id' => 86,
                'problem' => '<p>In what order are NACL rules evaluated?</p>',
                'solution' => '<p>Rules are evaluated in order of their number from lowest to highest.<br><br><br>More details can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#nacl-rules" target="_blank">NACL user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 22:08:12',
            ),
            83 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:11:19',
                'difficulty' => 3,
                'id' => 87,
                'problem' => '<p>What components make up a NACL rule?</p>',
            'solution' => '<p>Rule Number, Type, Protocol, Port Range, Source ( inbound traffic ), Destination ( outbound traffic ) and the action ( allow / deny ).<br><br><br>More information can be found on the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#nacl-rules" target="_blank">NACL user guide</a>.</p>',
                'updated_at' => '2020-04-26 22:11:19',
            ),
            84 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:20:23',
                'difficulty' => 4,
                'id' => 88,
                'problem' => '<p>What ephemeral port range should you add to your VPC NACL to support the widest range of clients?</p>',
                'solution' => '<p>1024 - 65535. <br><br><br>Ports used by different operating systems vary, more details can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#nacl-ephemeral-ports" target="_blank">VPC user guide.</a></p>',
                'updated_at' => '2020-04-26 22:20:23',
            ),
            85 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:27:32',
                'difficulty' => 3,
                'id' => 89,
                'problem' => '<p>What traffic is allowed by an unmodified default NACL?</p>',
                'solution' => '<p>A default NACL will allow all IPv4 and IPv6 traffic to and from the IP subnets it is associated with.<br><br><br>More information on default NACLs can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#default-network-acl" target="_blank">VPC user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 22:27:32',
            ),
            86 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:39:14',
                'difficulty' => 3,
                'id' => 90,
                'problem' => '<p>How many NACLs can a subnet be associated with at a given time?</p>',
                'solution' => '<p>A subnet can only be associated with one NACL at a time. Although a NACL can be associated with multiple subnets.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#NetworkACL" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 22:39:14',
            ),
            87 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:43:58',
                'difficulty' => 3,
                'id' => 91,
                'problem' => '<p>What is evaluated first, a security group or a NACL?</p>',
                'solution' => '<p>The rules in any relevant NACLs are evaluated before the rules in Security Groups.<br><br><br>See diagram in the VPC user guide for a <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Security.html#VPC_Security_Comparison" target="_blank">high level overview</a>.</p>',
                'updated_at' => '2020-04-26 22:43:58',
            ),
            88 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:51:07',
                'difficulty' => 4,
                'id' => 92,
                'problem' => '<p>When adding rules to a network ACL for internal internet access you need to create rules for the "Ephemeral Ports" on inbound or outbound traffic?&nbsp;</p>',
                'solution' => '<p>Traffic on the "Ephemeral Ports" needs an allow rule in both the inbound and outbound directions.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-network-acls.html#custom-network-acl" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 22:51:07',
            ),
            89 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 22:54:46',
                'difficulty' => 3,
                'id' => 93,
                'problem' => '<p>Denying an IP address, Security Group or NACL?</p>',
                'solution' => '<p>NACL, Security Group rules only allow traffic they do not support a "Deny" action.&nbsp;<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_Security.html#VPC_Security_Comparison" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 22:54:46',
            ),
            90 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:05:17',
                'difficulty' => 3,
                'id' => 94,
                'problem' => '<p>What subnet prerequisite is there before you can add an ELB to your VPC?&nbsp;</p>',
                'solution' => '<p>You must have at least two subnets in different availability zones for redundancy.</p><p><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/classic/elb-manage-subnets.html" target="_blank">ELB user guide</a>.</p>',
                'updated_at' => '2020-04-26 23:05:17',
            ),
            91 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:11:21',
                'difficulty' => 3,
                'id' => 95,
                'problem' => '<p>What AWS feature is used to capture information about IP traffic in a VPC?</p>',
                'solution' => '<p>VPC flow logs record information about traffic within a VPC.<br><br><br>More information on VPC flow logs can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/flow-logs.html" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 23:11:21',
            ),
            92 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:17:11',
                'difficulty' => 4,
                'id' => 96,
                'problem' => '<p>At what level can you enable VPC flow logs?</p>',
                'solution' => '<p>VPC flow logs can be enabled to log traffic at the interface, subnet or VPC level.<br><br><br>More information on VPC flow logs can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/working-with-flow-logs.html#create-flow-log" target="_blank">VPC user guide</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 23:17:11',
            ),
            93 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:19:11',
                'difficulty' => 4,
                'id' => 97,
                'problem' => '<p>Where can VPC flow logs be sent for further analysis?</p>',
                'solution' => '<p>VPC Flow logs can be sent to S3 or Cloudwatch Logs.<br><br><br>More information on VPC flow log destinations can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/working-with-flow-logs.html#create-flow-log" target="_blank">VPC user guide</a>.</p>',
                'updated_at' => '2020-04-26 23:19:11',
            ),
            94 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:26:31',
                'difficulty' => 4,
                'id' => 98,
                'problem' => '<p>What filters are available when creating a VPC flow log?</p>',
                'solution' => '<p>VPC flow log filters limit the type of traffic recorded. These are:<br><br>All - Record both traffic that is accepted and rejected.<br><br>Accept - Record traffic that was accepted<br><br>Reject - Log the traffic that was rejected</p>',
                'updated_at' => '2020-04-26 23:26:31',
            ),
            95 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:38:34',
                'difficulty' => 4,
                'id' => 99,
                'problem' => '<p>How can you change the configuration of a VPC Flow Log you have created?</p>',
                'solution' => '<p>After you have created a flow log you cannot change its configuration.Instead you must delete it and create a new one with the desired configuration.<br><br><br>More <a href="https://docs.aws.amazon.com/vpc/latest/userguide/flow-logs.html#flow-logs-limitations" target="_blank">VPC Flow Log Limitations can be found here</a>.</p>',
                'updated_at' => '2020-04-26 23:38:34',
            ),
            96 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-26 23:44:33',
                'difficulty' => 4,
                'id' => 100,
                'problem' => '<p>What sorts of traffic do VPC flow logs not capture?</p>',
                'solution' => '<p>DHCP traffic, DNS look ups with the AWS DNS service, Windows licence activation related communications, instance metadata traffic to 169.254.169.254, traffic to the time service at 169.254.169.123 and traffic to the VPC router on its reserved IP address.</p><p><br></p><p>A full list can be found on the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/flow-logs.html#flow-logs-limitations" target="_blank">VPC Flow Log limitations page</a>.&nbsp;</p>',
                'updated_at' => '2020-04-26 23:47:09',
            ),
            97 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-27 03:41:26',
                'difficulty' => 3,
                'id' => 101,
                'problem' => '<p>What is the purpose of a Bastion host?</p>',
                'solution' => '<p>A bastion host is a hardened EC2 instance located in a public subnet that allows access via RDP or SSH to other instances in a VPC.<br><br><br>More information can be for on Bastion hosts in the <a href="https://docs.aws.amazon.com/quickstart/latest/linux-bastion/architecture.html" target="_blank">AWS quick start guide</a>.</p>',
                'updated_at' => '2020-04-27 03:41:26',
            ),
            98 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-27 03:46:06',
                'difficulty' => 3,
                'id' => 102,
                'problem' => 'What is the purpose of AWS direct connect?',
                'solution' => '<p>AWS direct connect allows you to have a performant, secure connection between your local network to AWS.<br><br><br>More details on AWS Direct Connect can be <a href="https://aws.amazon.com/directconnect/" target="_blank">found on the AWS website</a>.</p>',
                'updated_at' => '2020-04-27 03:46:06',
            ),
            99 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-27 03:56:07',
                'difficulty' => 3,
                'id' => 103,
                'problem' => '<p>By default how many IP addresses are provided with the Global Accelerator service?</p>',
                'solution' => '<p>AWS will provide two IP addresses, or you can use your own IP addresses with Global Accelerator.</p><p><br></p><p>More information can be found in the <a href="https://aws.amazon.com/global-accelerator/faqs/" target="_blank">Global Accelerator FAQ.</a></p>',
                'updated_at' => '2020-04-27 03:56:07',
            ),
            100 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-27 05:43:43',
                'difficulty' => 3,
                'id' => 104,
                'problem' => '<p>What is a VPC endpoint?</p>',
                'solution' => '<p>A VPC endpoint allows instances in your VPC to communicate to supported AWS services directly. So your traffic never leaves the AWS network, resulting in increased security, speed and lower data transfer charges.<br><br><br>More information on VPC endpoints can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-endpoints.html" target="_blank">VPC user guide.</a></p>',
                'updated_at' => '2020-04-27 05:43:43',
            ),
            101 =>
            array (
                'category' => 1,
                'created_at' => '2020-04-27 05:48:44',
                'difficulty' => 3,
                'id' => 105,
                'problem' => '<p>What are the two different types of VPC endpoint?</p>',
                'solution' => '<p><a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpce-gateway.html" target="_blank">Gateway Endpoint</a> - Sets an AWS service as the target of a route in your route table.<br></p><p><br><a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpce-interface.html" target="_blank">Interface Endpoint</a> - ENI with an address in your subnet used to access AWS services.</p>',
                'updated_at' => '2020-04-27 05:48:44',
            ),
            102 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-27 05:51:14',
                'difficulty' => 3,
                'id' => 106,
                'problem' => '<p>Gateway VPC Endpoints are supported by what AWS services?</p>',
                'solution' => '<p>Amazon S3 &amp; Dynamo DB.<br><br><br>You can read more about <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpce-gateway.html" target="_blank">Gateway Endpoints here</a>.</p>',
                'updated_at' => '2020-04-27 05:51:14',
            ),
            103 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-28 04:16:59',
                'difficulty' => 2,
                'id' => 107,
                'problem' => '<p>What level of the OSI network model does an application load balancer operate at?&nbsp;</p>',
                'solution' => '<p>It operates at Level 7 of the OSI stack.<br><br><br>More information on application load balancers can be found in the <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/application/introduction.html" target="_blank">AWS documentation</a>.</p>',
                'updated_at' => '2020-04-28 04:16:59',
            ),
            104 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-28 04:21:03',
                'difficulty' => 2,
                'id' => 108,
                'problem' => '<p>What level of the OSI network model does a Network Load Balancer operate at?</p>',
            'solution' => '<p>They operate at the network level ( level 4 ). Allowing for ultra high performance and minimal performance.<br><br><br>More information on Network Load Balancers can be <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/network/introduction.html" target="_blank">found in the AWS documentation</a>.</p>',
                'updated_at' => '2020-04-28 04:21:03',
            ),
            105 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-28 04:24:55',
                'difficulty' => 2,
                'id' => 109,
                'problem' => '<p>What are the three types of ELB available?</p>',
            'solution' => '<p>Application Load Balancer ( ALB )&nbsp;<br><br>Network Load Balancer<br><br>Classic Load Balancer</p>',
                'updated_at' => '2020-04-28 04:24:55',
            ),
            106 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-28 04:27:00',
                'difficulty' => 2,
                'id' => 110,
                'problem' => '<p>What HTTP errors code will an ELB return if the connection to the application or resource fails?</p>',
                'solution' => '<p>HTTP 504 - Gateway Timeout.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/classic/ts-elb-errors-message.html" target="_blank">ELB documentation</a>.</p>',
                'updated_at' => '2020-04-28 04:27:00',
            ),
            107 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-29 05:15:52',
                'difficulty' => 2,
                'id' => 111,
                'problem' => '<p>When using a Classic load balancer what is the purpose of "Sticky Sessions"?</p>',
                'solution' => '<p>Sticky Sessions ensure that all requests sent from a user are sent to the same EC2 instance.<br><br><br>More information about Sticky Sessions can be <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/classic/elb-sticky-sessions.html" target="_blank">found in the ELB documentation</a>.</p>',
                'updated_at' => '2020-04-29 05:15:52',
            ),
            108 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-29 05:21:01',
                'difficulty' => 3,
                'id' => 112,
            'problem' => '<p>What sort of behaviour is enabled by activating "Sticky Sessions" on a Application Load Balancer ( ALB )?</p>',
                'solution' => '<p>Sticky Sessions when used with a Classic Load Balancer will route all requests from a user to the same EC2 instance.</p><p><br></p><p>When Sticky Sessions are enabled on an ALB all requests from a user are routed to the same target group.</p><p><br></p><p>More information on <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/application/load-balancer-target-groups.html#sticky-sessions" target="_blank">ALB Sticky Sessions can be found here.</a></p>',
                'updated_at' => '2020-04-29 05:21:01',
            ),
            109 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-29 05:28:02',
                'difficulty' => 2,
                'id' => 113,
                'problem' => '<p>What is the purpose of Cross Zone Load Balancing?</p>',
                'solution' => '<p>It allows your ELB instances to route traffic across availability zones to all registered instances.</p><p><br></p><p>More information on cross zone load balancing can be <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/application/load-balancer-target-groups.html#sticky-sessions" target="_blank">found in the AWS documentation.</a></p>',
                'updated_at' => '2020-04-29 05:28:02',
            ),
            110 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-29 05:31:55',
                'difficulty' => 3,
                'id' => 114,
                'problem' => '<p>What is path based routing?</p>',
                'solution' => '<p>Path based routing allows you to direct requests received by your Application Load Balancer via the application path in the request.<br><br><br>More information can be found about <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/application/tutorial-load-balancer-routing.html" target="_blank">path based routing here</a>.</p>',
                'updated_at' => '2020-04-29 05:31:55',
            ),
            111 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-29 05:36:08',
                'difficulty' => 1,
                'id' => 115,
                'problem' => '<p>What is an "Auto Scaling Group"?</p>',
                'solution' => '<p>An auto scaling group is a grouping of EC2 instances for the purpose of management and scaling.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/autoscaling/ec2/userguide/AutoScalingGroup.html" target="_blank">AWS auto scaling documentation</a>.</p>',
                'updated_at' => '2020-04-29 05:36:08',
            ),
            112 =>
            array (
                'category' => 5,
                'created_at' => '2020-04-30 06:23:17',
                'difficulty' => 3,
                'id' => 116,
                'problem' => '<p>How can you force an RDS instance to fail over to another availability zone?</p>',
                'solution' => '<p>You can achieve this by <u>rebooting</u> your RDS instance.<br><br><br>See the <a href="https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/USER_RebootInstance.html" target="_blank">RDS user guide for more details</a>.</p>',
                'updated_at' => '2020-06-13 05:50:30',
            ),
            113 =>
            array (
                'category' => 9,
                'created_at' => '2020-04-30 06:42:37',
                'difficulty' => 2,
                'id' => 117,
                'problem' => '<p>What are the two statuses that ELB uses to describe your EC2 instances?</p>',
            'solution' => '<p>InService ( if the status has passed its health checks ) or Outofservice ( if the health check has failed ).<br><br><br>More information of configuring your ELB health checks can be <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/classic/elb-healthchecks.html" target="_blank">found in the user guide</a>.<br><br><br><br></p>',
                'updated_at' => '2020-04-30 06:42:37',
            ),
            114 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:15:03',
                'difficulty' => 3,
                'id' => 118,
                'problem' => '<p>What is the maximum message size in SQS without using the SQS Extended client library for Java?</p>',
                'solution' => '<p>256kb.</p><p><br></p><p>More information on SQS message constraints can be found in the <a href="https://aws.amazon.com/sqs/faqs/" target="_blank">SQS FAQ</a>.</p>',
                'updated_at' => '2020-05-01 06:15:03',
            ),
            115 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:44:30',
                'difficulty' => 4,
                'id' => 119,
                'problem' => '<p>What is the maximum speed of a FIFO SQS queue?</p>',
                'solution' => '<p>FIFO queues are limited to maximum 300 transactions per second.</p>',
                'updated_at' => '2020-05-01 06:44:30',
            ),
            116 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:45:46',
                'difficulty' => 2,
                'id' => 120,
                'problem' => '<p>Is the AWS SWS service pull or push based?</p>',
                'solution' => '<p>The SQS service is pull based, clients poll the queue for messages.&nbsp;</p>',
                'updated_at' => '2020-05-01 06:45:46',
            ),
            117 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:48:33',
                'difficulty' => 2,
                'id' => 121,
                'problem' => '<p>What is the default retention period for SQS messages in a queue?</p>',
                'solution' => '<p>The default retention period for messages is 4 days.<br><br><br>Retention periods can vary from 1 minute to a maximum period of 14 days.&nbsp;</p>',
                'updated_at' => '2020-05-01 06:48:33',
            ),
            118 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:51:44',
                'difficulty' => 2,
                'id' => 122,
                'problem' => '<p>What is the maximum visibility timeout period for SQS queues?</p>',
                'solution' => '<p>The maximum visibility timeout period is 12 hours.</p><p><br></p><p>More information can be found in the <a href="https://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/sqs-visibility-timeout.html" target="_blank">SQS developer guide</a>.</p>',
                'updated_at' => '2020-05-01 06:51:44',
            ),
            119 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-01 06:52:58',
                'difficulty' => 3,
                'id' => 123,
                'problem' => '<p>What is the default SQS visibility timeout period?</p>',
            'solution' => '<p>The default visibility timeout for a message is 30 seconds, but this can be set as low as 0 seconds.<br><br><br><br><span style="font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;">More information can be found in the&nbsp;</span><a href="https://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/sqs-visibility-timeout.html" target="_blank" style="background-color: rgb(255, 255, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-size: medium; font-family: &quot;Times New Roman&quot;;">SQS developer guide</a><span style="font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;">.</span><br></p>',
                'updated_at' => '2020-05-01 06:52:58',
            ),
            120 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-02 01:04:16',
                'difficulty' => 3,
                'id' => 124,
                'problem' => '<p>What is the maximum period an Amazon SWF execution can last?</p>',
                'solution' => '<p>One year.<br><br><br>More details can be found in the <a href="https://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dg-limits.html#swf-dg-limits-workflow-executions" target="_blank">SWF developer guide</a>.</p>',
                'updated_at' => '2020-05-02 01:04:16',
            ),
            121 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-02 01:14:48',
                'difficulty' => 1,
                'id' => 125,
                'problem' => '<p>What is AWS SNS?</p>',
                'solution' => '<p>SNS stands for Simple Notification Service. Amazon SNS offers a pub / sub style messaging service.<br><br><br>More information can be found in the <a href="https://aws.amazon.com/sns/" target="_blank">SNS documentation</a>.</p>',
                'updated_at' => '2020-05-02 01:14:48',
            ),
            122 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-02 01:24:12',
                'difficulty' => 2,
                'id' => 126,
                'problem' => '<p>How durable is a message sent to SNS?</p>',
                'solution' => '<p>All messages sent to the SNS service are replicated across multiple availability zones before providing a receipt to the provider.<br><br><br>More information can be found on the <a href="https://aws.amazon.com/sns/faqs/#Reliability" target="_blank">AWS SNS FAQ</a>.</p>',
                'updated_at' => '2020-05-02 01:24:12',
            ),
            123 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-03 22:11:09',
                'difficulty' => 3,
                'id' => 127,
                'problem' => '<p>What is the purpose of enabling "cacheing" on API Gateway?</p>',
                'solution' => '<p>Enabling cacheing will allow you to set a cache layer for your API. This will cache responses allowing faster response times and lower load on your back-end services.<br><br><br>More information on API Gateway <a href="https://aws.amazon.com/api-gateway/faqs/#Throttling_and_Caching" target="_blank">cacheing can be found in the FAQ.</a></p>',
                'updated_at' => '2020-05-03 22:11:09',
            ),
            124 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-03 22:30:09',
                'difficulty' => 3,
                'id' => 128,
            'problem' => 'What is the maximum possible lifespan ( TTL ) of records in a Kinesis stream?',
                'solution' => 'Records added to a Kinesis Data Stream can persist for a maximum period of 7 days.<br><br><br>More information on Kinesis limits can be <a href="https://aws.amazon.com/kinesis/data-streams/faqs/" target="_blank">found in the FAQ</a>.',
                'updated_at' => '2020-05-03 22:30:09',
            ),
            125 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-03 22:32:03',
                'difficulty' => 3,
                'id' => 129,
                'problem' => '<p>By default a record added to a Kinesis Data Stream will persist for how long?</p>',
                'solution' => '<p>By default a Kinesis Data Stream will retain a record for 24 hours.<br><br><br>More information on Kinesis Data Stream limits can be <a href="https://aws.amazon.com/kinesis/data-streams/faqs/" target="_blank">found in the FAQ</a>.</p>',
                'updated_at' => '2020-05-03 22:32:03',
            ),
            126 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-03 22:35:47',
                'difficulty' => 3,
                'id' => 130,
                'problem' => '<p>What is the maximum size allowable size for records with Kinesis Data Streams?</p>',
                'solution' => '<p>Records can have a payload up to 1mb in size.<br><br><br>More information on Kinesis Data Stream limits can be <a href="https://docs.aws.amazon.com/streams/latest/dev/service-sizes-and-limits.html" target="_blank">found in the developer guide</a>.</p>',
                'updated_at' => '2020-05-03 22:35:47',
            ),
            127 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-03 22:38:30',
                'difficulty' => 2,
                'id' => 131,
                'problem' => '<p>What is the maximum ingestion rate of a Kinesis Data Stream Shard?</p>',
                'solution' => '<p>1mb a second. So if you need a throughput of 10mb/s a second you would need a minimum of 10 shards in your stream.<br><br><br><br>More information of Kinesis Data Stream limits can be <a href="https://docs.aws.amazon.com/streams/latest/dev/service-sizes-and-limits.html" target="_blank">found in the developer guide</a>.</p>',
                'updated_at' => '2020-05-03 22:38:30',
            ),
            128 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-03 22:58:03',
                'difficulty' => 2,
                'id' => 132,
                'problem' => '<p>How many times will standard SQS queue deliver a message?</p>',
                'solution' => '<p>Standard SQS queues do not guarantee delivery order and your messages may be delivered more than once. If you need strict single message or first in / first out processing you will need to use a FIFO queue.<br><br><br>More details can be found in the <a href="https://aws.amazon.com/sqs/faqs/" target="_blank">AWS SQS FAQ</a>.</p>',
                'updated_at' => '2020-05-03 22:58:03',
            ),
            129 =>
            array (
                'category' => 5,
                'created_at' => '2020-05-04 04:15:12',
                'difficulty' => 2,
                'id' => 133,
                'problem' => '<p>What is the size limit of a Dynamo DB object?</p>',
                'solution' => '<p>The maximum size of a Dynamo DB object is 400kb.<br><br><br>More details can be found in the <a href="https://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Limits.html#limits-items" target="_blank">AWS Dynamo DB developer guide</a>.</p>',
                'updated_at' => '2020-05-04 04:15:12',
            ),
            130 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 20:22:09',
                'difficulty' => 3,
                'id' => 134,
                'problem' => '<p>What elements is the CIA model of security composed of?<br></p>',
                'solution' => '<ul><li>Confidentiality<br><br></li><li>Integrity<br><br></li><li>Availability</li></ul><p><br>More information on the <a href="http://www.doc.ic.ac.uk/~ajs300/security/CIA.htm" target="_blank">CIA triad can&nbsp; be found here</a>.<br></p>',
                'updated_at' => '2020-05-20 23:32:08',
            ),
            131 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 20:28:29',
                'difficulty' => 3,
                'id' => 135,
                'problem' => '<p>In computer security whats does the acronym AAA mean?<br></p>',
            'solution' => '<ul><li>Authentication<br><br></li><li>Authorisation<br><br></li><li>Accounting</li></ul><p><br>More information on the <a href="https://en.wikipedia.org/wiki/AAA_(computer_security)" target="_blank">triple A model can be found here</a>.<br></p>',
                'updated_at' => '2020-05-20 23:31:39',
            ),
            132 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 20:38:44',
                'difficulty' => 2,
                'id' => 136,
                'problem' => '<p>What is an IAM credential report?<br></p>',
                'solution' => '<p>An IAM credential reports is a CSV export containing all of the users under an AWS account. Combined with the status of their credentials, including passwords,
access keys, and MFA devices.<br><br><br>More information on IAM credential reports can be found in the <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/id_credentials_getting-report.html" target="_blank">IAM documentation</a>.<br></p>',
                'updated_at' => '2020-05-09 20:38:44',
            ),
            133 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 20:56:41',
                'difficulty' => 4,
                'id' => 137,
                'problem' => '<p>What commands would you use to generate and download an IAM credential report from the AWS CLI? <br></p>',
                'solution' => '<ul><li><font color="#CE0000">aws iam generate-credential-report</font> - To generate the report.</li><li><span style="background-color: inherit;"><font color="#CE0000">aws iam get-credential-report</font></span> - Download an IAM report.</li></ul><p><br><br>More information of both commands can be found in the <a href="https://docs.aws.amazon.com/cli/latest/reference/iam/index.html" target="_blank">AWS CLI reference guide</a>.<br></p>',
                'updated_at' => '2020-05-09 20:56:41',
            ),
            134 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 21:05:20',
                'difficulty' => 3,
                'id' => 138,
                'problem' => '<p>What are the three types of AWS IAM "identity based" policies?<br></p>',
                'solution' => '<ul><li>AWS Managed Policies.<br><br></li><li>Customer Managed Policies. <br><br></li><li>Inline Policies.</li></ul><p><br></p><p>More information on the <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/access_policies.html#policies_id-based" target="_blank">three policy types can be found here</a>.<br></p>',
                'updated_at' => '2020-05-20 23:32:32',
            ),
            135 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 21:15:43',
                'difficulty' => 3,
                'id' => 139,
                'problem' => '<p>When would you use an S3 ACL over an IAM or bucket policy?<br></p>',
                'solution' => '<p>AWS considers S3 ACL\'s a legacy control system that predates IAM. <br><br>But S3 ACL\'s can still be handy for controlling access at an object level i.e access to individual objects within a bucket.<br><br><br><br>More information on S3 ACL\'s vs IAM Policies vs Bucket Policies can be <a href="https://aws.amazon.com/blogs/security/iam-policies-and-bucket-policies-and-acls-oh-my-controlling-access-to-s3-resources/" target="_blank">found on the AWS blog</a>.<br></p>',
                'updated_at' => '2020-05-09 21:15:43',
            ),
            136 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 21:32:02',
                'difficulty' => 2,
                'id' => 140,
                'problem' => '<p>How would you deny access to S3 buckets that not made using HTTPS?<br></p>',
                'solution' => '<p>You would include the <font color="#CE0000"><span style="background-color: inherit;">SecureTransport</span></font> flag as a condition in a bucket policy to deny any insecure HTTP connections.<br><br><br>More details can be found in the <a href="https://aws.amazon.com/premiumsupport/knowledge-center/s3-bucket-policy-for-config-rule/" target="_blank">AWS Knowledge Center</a>.<br></p>',
                'updated_at' => '2020-05-09 21:32:02',
            ),
            137 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-09 21:37:14',
                'difficulty' => 2,
                'id' => 141,
                'problem' => '<p>When using S3 cross region replication, how do you ensure secure transport of your objects in transit?<br></p>',
                'solution' => '<p>The is no need, by default all S3 objects in transit are protected by SSL.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/replication-how-setup.html" target="_blank">AWS replication overview</a>.<br></p>',
                'updated_at' => '2020-05-09 21:37:14',
            ),
            138 =>
            array (
                'category' => 3,
                'created_at' => '2020-05-09 21:44:06',
                'difficulty' => 3,
                'id' => 142,
                'problem' => '<p>What is a "Pre Signed URL" used for?<br></p>',
                'solution' => '<p>An S3 "Pre Signed URL" allows you to grant temporary access to an S3 object for a given length of time.<br><br><br>More information on generating S3 Pre Signed URL\'s can be found in the <a href="https://docs.aws.amazon.com/sdk-for-go/v1/developer-guide/s3-example-presigned-urls.html" target="_blank">AWS developer guide</a>.<br></p>',
                'updated_at' => '2020-05-09 21:44:06',
            ),
            139 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-11 05:00:31',
                'difficulty' => 4,
                'id' => 143,
                'problem' => '<p>How can you ensure that a CloudTrail log file has not been altered? <br></p>',
                'solution' => '<p>You can enable "file integrity validation" this will create a SHA256 hash for every log file delivered.<br><br><br>You can find out more about file integrity validation in the <a href="https://docs.aws.amazon.com/awscloudtrail/latest/userguide/cloudtrail-log-file-validation-intro.html" target="_blank">CloudTrail user guide</a>.<br></p>',
                'updated_at' => '2020-05-11 05:00:31',
            ),
            140 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-11 05:13:47',
                'difficulty' => 4,
                'id' => 144,
                'problem' => '<p>What AWS encryption related service would you use to import or export an asymmetric private key.<br></p>',
                'solution' => '<p>CloudHSM, Amazon KMS only supports the use of symmetric keys.</p><p><br><br></p>',
                'updated_at' => '2020-05-11 05:13:47',
            ),
            141 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-11 05:15:45',
                'difficulty' => 4,
                'id' => 145,
                'problem' => '<p>What AWS encryption services would you use if you needed to meet FIPS-140-2 compliance?<br></p>',
                'solution' => 'The CloudHSM service is required to meet FIPS-140 compliance.<br><br><br>More information can be found in the <a href="https://aws.amazon.com/cloudhsm/faqs/#Security" target="_blank">CloudHSM FAQ</a>.<br>',
                'updated_at' => '2020-05-11 05:16:24',
            ),
            142 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-11 05:22:43',
                'difficulty' => 3,
                'id' => 146,
                'problem' => '<p>What service does AWS Inspector help you improve the security of?<br></p>',
                'solution' => '<p>AWS Inspector helps you improve the security of your EC2 resources by running "assessments" against your instances.<br><br><br>More information on AWS Inspector can be <a href="https://aws.amazon.com/inspector/" target="_blank">found in the user guide</a>.<br></p>',
                'updated_at' => '2020-05-11 05:22:43',
            ),
            143 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-11 05:27:47',
                'difficulty' => 2,
                'id' => 147,
                'problem' => '<p>What are the four AWS support plan tiers?<br></p>',
                'solution' => '<p>Basic, Developer, Business and Enterprise.<br><br><br>More information on the pricing and features of <a href="https://aws.amazon.com/premiumsupport/plans/" target="_blank">each tier can be found here</a>.<br></p>',
                'updated_at' => '2020-05-11 05:27:47',
            ),
            144 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-12 02:27:11',
                'difficulty' => 4,
                'id' => 148,
                'problem' => '<p>Upon deleting a CMK from the Amazon KMS service enforces a waiting period before the key material is deleted from the system <br><br>What is the minimum allowed waiting period?<br></p>',
                'solution' => '<p>7 days.<br><br><br>More information on CMK waiting periods can be found in the <a href="https://docs.aws.amazon.com/kms/latest/developerguide/deleting-keys.html" target="_blank">KMS developer guide</a>.<br></p>',
                'updated_at' => '2020-05-12 02:27:11',
            ),
            145 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-12 02:29:14',
                'difficulty' => 4,
                'id' => 149,
                'problem' => '<p>Upon deleting a CMK from the Amazon KMS service enforces a waiting period before the key material is deleted.<br><br><br>What is the maximum allowed waiting period?<br></p>',
                'solution' => '<p>30 days, is the maximum and default waiting period.<br><br><br>More information on KMS waiting periods can be found in the <a href="https://docs.aws.amazon.com/kms/latest/developerguide/deleting-keys.html" target="_blank">KMS developer guide</a>.<br></p>',
                'updated_at' => '2020-05-20 23:28:55',
            ),
            146 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-12 02:39:23',
                'difficulty' => 4,
                'id' => 150,
                'problem' => '<p>How can you automatically rotate a CMK using imported key material?<br></p>',
                'solution' => '<p>You cannot automatically rotate imported keys. You must generate new key material import and map and alias to rotate manually.<br><br><br>More information about key rotation can be <a href="https://aws.amazon.com/kms/faqs/" target="_blank">found on the KMS FAQ</a>.<br></p>',
                'updated_at' => '2020-05-12 02:39:23',
            ),
            147 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-12 02:41:53',
                'difficulty' => 4,
                'id' => 151,
                'problem' => '<p>Is there a limit on the amount of AWS KMS CMKs you can have?<br></p>',
                'solution' => '<p>Yes you are limited to 10000 CMKs per region in an account.<br><br><br>More information on KMS service limits can be <a href="https://aws.amazon.com/kms/faqs/" target="_blank">found in the KMS FAQ</a>.<br></p>',
                'updated_at' => '2020-05-12 02:41:53',
            ),
            148 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-12 02:49:02',
                'difficulty' => 2,
                'id' => 152,
                'problem' => '<p>What is the purpose of the AWS Shield service?<br></p>',
                'solution' => '<p>AWS Shield helps protect your AWS resources from DDOS attacks.<br><br><br>More information can be <a href="https://aws.amazon.com/shield/faqs/" target="_blank">found in the AWS Shield FAQ</a>.<br></p>',
                'updated_at' => '2020-05-12 02:49:02',
            ),
            149 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:25:28',
                'difficulty' => 3,
                'id' => 153,
                'problem' => '<p>What is the purpose of the AWS Transit Gateway service?<br></p>',
                'solution' => '<p>It allows you to connect to all of your VPC\'s to a single VPN gateway.<br><br><br>More information about the Transit Gateway service can be <a href="https://aws.amazon.com/transit-gateway/faqs/" target="_blank">found in the FAQ</a>.<br></p>',
                'updated_at' => '2020-05-13 05:25:28',
            ),
            150 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:33:12',
                'difficulty' => 3,
                'id' => 154,
                'problem' => '<p>Should a NAT instance be placed in a public subnet? Or in the private subnet with the instances it is providing connectivity for?<br></p>',
                'solution' => '<p>A NAT instance must be placed in a public sub net to work.<br><br><br>More information on configuring <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_NAT_Instance.html" target="_blank">NAT instances can be found here</a>.<br></p>',
                'updated_at' => '2020-05-13 05:33:12',
            ),
            151 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:37:34',
                'difficulty' => 3,
                'id' => 155,
                'problem' => '<p>A NAT gateway can scale up to how many Gbps throughput?<br></p>',
                'solution' => '<p>A NAT Gateway can scale from 5 - 45 Gbps.<br><br><br>More information about NAT Gateway limitations can be <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">found in the user guide</a>.<br></p>',
                'updated_at' => '2020-05-13 05:37:34',
            ),
            152 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:39:21',
                'difficulty' => 3,
                'id' => 156,
                'problem' => '<p>What networking protocols are supported by a NAT gateway?<br></p>',
                'solution' => '<p>NAT Gateways support TCP, UDP and ICMP.<br><br><br>More information on NAT gateway limits <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">can be found in the user guide</a>.<br></p>',
                'updated_at' => '2020-05-13 05:39:21',
            ),
            153 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:41:49',
                'difficulty' => 3,
                'id' => 157,
                'problem' => '<p>How do you associate a security group with a NAT Gateway?<br></p>',
                'solution' => '<p>You cannot associate a security group with a NAT Gateway. Security Groups are instead attached to the instances in your VPC.<br><br><br>More information on NAT Gateways can be <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">found in the user guide</a>.<br></p>',
                'updated_at' => '2020-05-13 05:41:49',
            ),
            154 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:44:14',
                'difficulty' => 3,
                'id' => 158,
                'problem' => '<p>How many Elastic IP addresses can you associate with a NAT gateway instance?<br></p>',
                'solution' => '<p>Just one, and once an Elastic IP has been assigned to a NAT Gateway it cannot be removed.<br><br><br>Please see the NAT Gateway <a href="https://docs.aws.amazon.com/vpc/latest/userguide/vpc-nat-gateway.html#nat-gateway-limits" target="_blank">user guide for more details</a>.<br></p>',
                'updated_at' => '2020-05-13 05:44:14',
            ),
            155 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-13 05:49:45',
                'difficulty' => 4,
                'id' => 159,
                'problem' => '<p>When attached to a Nitro based EC2 instance what is the maximum aggregation interval?<br></p>',
                'solution' => '<p>When attached to a Nitro based instance the aggregation interval is always one minute or less regardless of the specified value.<br><br><br>See the VPC flow log user guide for <a href="https://docs.aws.amazon.com/vpc/latest/userguide/flow-logs.html#flow-logs-limitations" target="_blank">more information</a>.<br></p>',
                'updated_at' => '2020-05-13 05:49:45',
            ),
            156 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:04:19',
                'difficulty' => 2,
                'id' => 160,
                'problem' => '<p>What services does AWS Shield work to protect from attacks?<br></p>',
                'solution' => '<p>Cloudfront, EC2, AWS Global Accelerator and Route53.<br><br><br>More information about the <a href="https://aws.amazon.com/shield/" target="_blank">AWS Shield service can be found here</a>.<br></p>',
                'updated_at' => '2020-05-14 03:04:19',
            ),
            157 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:08:08',
                'difficulty' => 3,
                'id' => 161,
                'problem' => '<p>What sort of attacks does AWS Shield help protect your resources from?<br></p>',
                'solution' => '<p>It protects against layer 3 &amp; 4 network attacks like  like SYN/UDP floods and reflection attacks.<br><br><br>More information about <a href="https://aws.amazon.com/shield/faqs/" target="_blank">AWS Shield can be found in the FAQ</a>.<br></p>',
                'updated_at' => '2020-05-14 03:08:08',
            ),
            158 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:15:46',
                'difficulty' => 4,
                'id' => 162,
                'problem' => '<p>What AWS services can be leveraged to help mitigate the effect of a DDOS attack?<br></p>',
                'solution' => '<p>Cloudfront, Cloudwatch, Route 53, Elastic Load Balancers, API Gateway and AWS WAF.<br><br><br>More information can be <a href="https://d1.awsstatic.com/whitepapers/Security/DDoS_White_Paper.pdf" target="_blank">found in the AWS DDOS Whitepaper</a>.<br></p>',
                'updated_at' => '2020-05-14 03:15:46',
            ),
            159 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:25:07',
                'difficulty' => 2,
                'id' => 163,
                'problem' => '<p>Amazon SSL certificates can be used with what services?<br></p>',
                'solution' => '<p>API Gateway, Cloudfront and Elastic Load Balancers.<br><br><br>More information can be found on the <a href="https://aws.amazon.com/certificate-manager/faqs/" target="_blank">certificate manager FAQ</a>.<br></p>',
                'updated_at' => '2020-05-14 03:25:07',
            ),
            160 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:28:56',
                'difficulty' => 3,
                'id' => 164,
            'problem' => '<p>Does the AWS Certificate Manager ( ACM ) service support wildcard certificates?<br></p>',
                'solution' => '<p>Yes.<br><br><br>More information on wildcard certificates can be found on the <a href="https://aws.amazon.com/certificate-manager/faqs/#ACM_Certificates" target="_blank">Certificate Manager FAQ</a>.<br></p>',
                'updated_at' => '2020-05-14 03:28:56',
            ),
            161 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-14 03:36:31',
                'difficulty' => 3,
                'id' => 165,
                'problem' => '<p>What is the maximum steady state requests per second API Gateway will provide for an AWS account?<br></p>',
                'solution' => '<p>By default API gateway requests are limited to a maximum of 10000 steady state requests per second. This can be raised by contacting AWS support.<br><br><br>More details can be <a href="https://docs.aws.amazon.com/apigateway/latest/developerguide/api-gateway-request-throttling.html#apig-request-throttling-account-level-limits" target="_blank">found on the API Gateway FAQ</a>.<br></p>',
                'updated_at' => '2020-05-14 03:36:31',
            ),
            162 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-14 03:42:15',
                'difficulty' => 3,
                'id' => 166,
                'problem' => '<p>What is the default and the maximum TTL values for a API Gateway cache?<br></p>',
            'solution' => '<p>The default TTLis 300 seconds with a maximum value of 3600 seconds ( 1 hour ). The value can also be set as low as 0 seconds which disables caching.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/apigateway/latest/developerguide/api-gateway-caching.html" target="_blank">AWS Gateway Developer Guide</a>.<br></p>',
                'updated_at' => '2020-05-14 03:42:15',
            ),
            163 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-14 03:45:27',
                'difficulty' => 4,
                'id' => 167,
                'problem' => '<p>What HTTP message does the AWS API Gateway service return when there are too many requests?<br></p>',
                'solution' => '<p>429 - Too Many Requests.<br><br><br>More information on API Gateway throttling can be <a href="https://docs.aws.amazon.com/apigateway/latest/developerguide/api-gateway-request-throttling.html" target="_blank">found in the developer guide</a>.<br></p>',
                'updated_at' => '2020-05-14 03:45:27',
            ),
            164 =>
            array (
                'category' => 2,
                'created_at' => '2020-05-14 03:49:31',
                'difficulty' => 3,
                'id' => 168,
                'problem' => '<p>How would you execute a command across your fleet of EC2 instances?<br></p>',
                'solution' => '<p>You would use the "Run Command: feature of the AWS Systems Manager service.<br><br><br>More information on using Run Command can be <a href="https://aws.amazon.com/getting-started/hands-on/remotely-run-commands-ec2-instance-systems-manager/" target="_blank">found in this tutorial</a>.<br></p>',
                'updated_at' => '2020-05-14 03:49:31',
            ),
            165 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-14 03:55:41',
                'difficulty' => 4,
                'id' => 169,
                'problem' => '<p>What level of FIPS-2 compliance does the CloudHSM service offer?<br></p>',
                'solution' => '<p>CloudHSM is compliant to FIPS-2 Level 3.<br><br><br>More information on compliance can be <a href="https://aws.amazon.com/cloudhsm/faqs/#Provisioning_and_operations" target="_blank">found in the CloudHSM FAQ</a>.<br></p>',
                'updated_at' => '2020-05-14 03:55:41',
            ),
            166 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-15 03:15:49',
                'difficulty' => 3,
                'id' => 170,
                'problem' => '<p>What is the purpose of the AWS Security Hub?<br></p>',
                'solution' => '<p>It is a centralised location for viewing high priority security alerts for your accounts along with the result of atomated check against your resources.<br><br><br>More information can be found on the <a href="https://aws.amazon.com/security-hub/" target="_blank">AWS Security Hub page</a>.<br></p>',
                'updated_at' => '2020-05-15 03:17:28',
            ),
            167 =>
            array (
                'category' => 9,
                'created_at' => '2020-05-15 03:21:19',
                'difficulty' => 3,
                'id' => 171,
                'problem' => '<p>Is the AWS Security Hub a global or regional service?<br></p>',
                'solution' => '<p>Security Hub is regional in scope.<br><br><br>More information can be <a href="https://aws.amazon.com/security-hub/faqs/" target="_blank">found on the security hub FAQ</a>.<br></p>',
                'updated_at' => '2020-05-15 03:21:19',
            ),
            168 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-15 21:56:13',
                'difficulty' => 3,
                'id' => 172,
                'problem' => '<p>What does the acronym HSM stand for?<br></p>',
            'solution' => 'Hardware Security Module ( HSM ).<br><br><br>More information about hardware security modules and their use can be <a href="https://en.wikipedia.org/wiki/Hardware_security_module" target="_blank">found on Wikipedia</a>.<br>',
                'updated_at' => '2020-05-15 21:56:13',
            ),
            169 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-15 22:01:38',
                'difficulty' => 4,
                'id' => 173,
                'problem' => 'Is a Cloud HSM device single or multi tenanted?<br>',
                'solution' => '<p>Cloud HSM is a single tenant service.<br><br><br>More information can be <a href="https://aws.amazon.com/cloudhsm/features/" target="_blank">found on the AWS Cloud HSM site</a>.<br></p>',
                'updated_at' => '2020-05-15 22:01:38',
            ),
            170 =>
            array (
                'category' => 10,
                'created_at' => '2020-05-15 22:25:31',
                'difficulty' => 4,
                'id' => 174,
                'problem' => '<p>Can you use Cloud HSM without a VPC?<br></p>',
                'solution' => '<p>No, to maintain isolation from other customers a Cloud HSM instance must be deployed into a VPC.</p><p><br></p><p>More information on Cloud HSM restrictions can be <a href="https://aws.amazon.com/cloudhsm/faqs/" target="_blank">found in the FAQ</a>.<br></p>',
                'updated_at' => '2020-05-15 22:25:31',
            ),
            171 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-28 02:26:59',
                'difficulty' => 3,
                'id' => 175,
                'problem' => '<p>How is the AWS Cloud Formation service priced?<br></p>',
                'solution' => '<p>The Cloud Formation service is free you simply pay for the resources provisioned by the the service.<br><br><br><br>More information can be found on the <a href="https://aws.amazon.com/cloudformation/pricing/" target="_blank">Cloud Formation site</a>.<br></p>',
                'updated_at' => '2020-05-28 02:26:59',
            ),
            172 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-28 02:26:59',
                'difficulty' => 2,
                'id' => 176,
                'problem' => '<p>How is the AWS Elastic Beanstalk service priced?<br></p>',
                'solution' => '<p>The Elastic Beanstalk service itself is free you pay. You are charged for the resources provisioned by the the service.<br><br><br><br>More information can be found on the <a href="https://aws.amazon.com/elasticbeanstalk/pricing/" target="_blank">Elastic Beanstalk site</a>.<br></p>',
                'updated_at' => '2020-05-28 02:30:02',
            ),
            173 =>
            array (
                'category' => 1,
                'created_at' => '2020-05-28 02:53:43',
                'difficulty' => 2,
                'id' => 177,
                'problem' => '<p>What AWS services are global?<br></p>',
                'solution' => '<ul><li>Cloudfront<br><br></li><li>IAM<br><br></li><li>Route53<br><br></li><li>SES<br><br></li><li>SNS<br></li></ul>',
                'updated_at' => '2020-05-28 02:53:43',
            ),
            174 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-19 21:22:21',
                'difficulty' => 4,
                'id' => 178,
                'problem' => '<p>What are some static analysis tools you can use to validate your Cloud Formation templates before deployment.<br></p>',
                'solution' => '<p>Some tools are:<br><br></p><ul><li>cfn-lint - <a href="https://github.com/aws-cloudformation/cfn-python-lint" target="_blank">Github<br><br><br></a></li><li>cfn-nag - <a href="https://github.com/stelligent/cfn_nag" target="_blank">Github</a> <br></li></ul><p><br>A blog post on the static analysis of <a href="https://stelligent.com/2018/03/23/validating-aws-cloudformation-templates-with-cfn_nag-and-mu/" target="_blank">Cloud Formation templates with cfn-nag is here</a>.<br></p>',
                'updated_at' => '2020-06-19 21:22:21',
            ),
            175 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 05:38:40',
                'difficulty' => 3,
                'id' => 179,
                'problem' => '<p>CloudFormation templates can be written in what formats?<br></p>',
                'solution' => '<p>Template files can be written using either <u>YAML or JSON</u>.<br></p>',
                'updated_at' => '2020-06-24 05:38:40',
            ),
            176 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:16:24',
                'difficulty' => 3,
                'id' => 180,
                'problem' => '<p>What is created from the execution of a CloudFormation template?<br></p>',
                'solution' => '<p>A "<u>Stack</u>" of cloud resources is created.<br><br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/stacks.html" target="_blank">CloudFormation user guide</a>.<br></p>',
                'updated_at' => '2020-06-24 06:16:24',
            ),
            177 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:20:46',
                'difficulty' => 4,
                'id' => 181,
                'problem' => '<p>What are CloudFormation "change sets" used for?<br></p>',
                'solution' => '<p>They allow you to assess the impact of changes to your running resources.<br><br><br>More information on change sets can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/using-cfn-updating-stacks-changesets.html" target="_blank">Cloud Formation user guide</a>.<br></p>',
                'updated_at' => '2020-06-24 06:20:46',
            ),
            178 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:27:33',
                'difficulty' => 4,
                'id' => 182,
                'problem' => '<p>What is the purpose of the "parameters" section of a CloudFormation template?<br></p>',
                'solution' => '<p>It helps define a set of values that can be assigned to your template at <u>run time</u>.<br><br><br><br>More information on the parameters section can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/parameters-section-structure.html" target="_blank">CloudFormation user guide</a>.<br><br></p>',
                'updated_at' => '2020-06-24 06:27:33',
            ),
            179 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:31:40',
                'difficulty' => 3,
                'id' => 183,
                'problem' => '<p>What is the only required section in a CloudFormation template?<br></p>',
                'solution' => '<p>The <u>Resources</u> section is the only required section for a template.<br><br><br>More information on the syntax can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/resources-section-structure.html" target="_blank">CloudFormation user guide</a>.<br></p>',
                'updated_at' => '2020-06-24 06:31:40',
            ),
            180 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:38:35',
                'difficulty' => 4,
                'id' => 184,
                'problem' => '<p>What is the "Outputs" section of a CloudFormation template used for?<br></p>',
                'solution' => '<p>The output defines a set of values to be returned from the generated stack. These can be used by other CloudFormation templates, allowing for template extension and reuse.<br><br><br>An AWS walk through on using outputs in <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/walkthrough-crossstackref.html" target="_blank">CloudFormation can be found here</a>. <br></p>',
                'updated_at' => '2020-06-24 06:38:35',
            ),
            181 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:42:24',
                'difficulty' => 4,
                'id' => 185,
                'problem' => '<p>Currently what is the only valid value for the AWSTemplateFormatVersion section of a template?<br></p>',
                'solution' => '<p>The only currently valid value for the optional AWSTemplateFormatVersion is <u>"2010-09-09"</u>.<br><br><br>More information on the parameter can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/format-version-structure.html" target="_blank">AWS user guide</a>.<br></p>',
                'updated_at' => '2020-06-24 06:42:24',
            ),
            182 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:49:15',
                'difficulty' => 4,
                'id' => 186,
                'problem' => '<p>A "Logical Id" in the resources section of a CloudFormation template serves what purpose?<br></p>',
                'solution' => '<p>The Logical Id is used to refer to a resource from <u>within</u> a template. Outside of the template the Physical Id of a resource is used for reference.<br><br><br>More information on the use of <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/resources-section-structure.html" target="_blank">logical id\'s can be found here</a>.<br></p>',
                'updated_at' => '2020-06-24 06:49:15',
            ),
            183 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-24 06:55:28',
                'difficulty' => 5,
                'id' => 187,
                'problem' => '<p>What are the elements of a resource definition in a CloudFormation Tempate?<br></p>',
                'solution' => '<p>The elements are Logical Id, Resource Type and the Resource Properties.<br><br><br>More information on the structure of resource objects can be <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/resources-section-structure.html" target="_blank">found in the CloudFormation user guide</a>.<br></p>',
                'updated_at' => '2020-06-24 06:55:28',
            ),
            184 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-25 04:35:40',
                'difficulty' => 5,
                'id' => 188,
                'problem' => '<p>What is an "intrinsic function"?<br></p>',
                'solution' => '<p>AWS provides a number of built in functions to help manage your stacks. These are called <u>"intrinsic functions"</u> and can be called from your CloudFormation templates.<br><br><br>More information on <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/intrinsic-function-reference.html" target="_blank">intrinsic functions can be found in the user guide</a>.<br></p>',
                'updated_at' => '2020-06-25 04:35:40',
            ),
            185 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-25 04:50:41',
                'difficulty' => 5,
                'id' => 189,
                'problem' => '<p>What is a "pseudo parameter"?<br></p>',
                'solution' => '<p>A pseudo parameter is a value provided by the AWS CloudFormation service that provides values to your template e.g the current AWS region.</p><p><br></p><p>More information about using <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/pseudo-parameter-reference.html" target="_blank">pseudo parameters can be found in the user guide</a>.<br></p>',
                'updated_at' => '2020-06-25 04:50:41',
            ),
            186 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-26 04:01:58',
                'difficulty' => 5,
                'id' => 190,
                'problem' => '<p>What are CloudFormation mappings useful for?</p>',
                'solution' => '<p>Mappings can be used to select a value according to another input value. A common use case for CloudFormation mappings is to map a EC2 AMI ID to a region.<br><br><br>More information on how to use <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/mappings-section-structure.html" target="_blank">CloudFormation mappings can be found in the user guide</a>.</p>',
                'updated_at' => '2020-06-26 04:01:58',
            ),
            187 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-26 04:11:53',
                'difficulty' => 5,
                'id' => 191,
                'problem' => '<p>What CloudFormation allows you leverage user provided values in your template?</p>',
                'solution' => '<p>User provided values are defined in the <u>parameters section</u> of your template. These must be specified at run time although they can be configured to fallback on a default value.<br><br><br>More information on <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/parameters-section-structure.html" target="_blank">parameters can be found in the user guide</a>.</p>',
                'updated_at' => '2020-06-26 04:11:53',
            ),
            188 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-26 04:17:01',
                'difficulty' => 3,
                'id' => 192,
                'problem' => '<p>What attribute is the only required attribute when defining a parameter in your template?</p>',
                'solution' => '<p>The data <u>"Type" attribute</u> defines the sort of value expected and is the only required field when defining a template parameter.<br><br><br>More information on <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/parameters-section-structure.html" target="_blank">parameter attributes can be found in the user guide</a>.</p>',
                'updated_at' => '2020-06-26 04:18:43',
            ),
            189 =>
            array (
                'category' => 11,
                'created_at' => '2020-06-28 07:00:15',
                'difficulty' => 5,
                'id' => 193,
                'problem' => '<p>What are the four operations available with a "Change Set"?<br></p>',
                'solution' => '<ul><li>Create - Create a change set for a running stack.</li></ul><ul><li>View - View the outcome of your proposed changes on the running stack.</li></ul><ul><li>Execute - Apply your template changes to the running stack.</li></ul><ul><li>Delete - Get rid of your changes without altering the running stack.<br><br><br></li></ul><p>More information about "Change Sets" <a href="https://aws.amazon.com/blogs/aws/new-change-sets-for-aws-cloudformation/" target="_blank">can be found in this AWS blog post</a>.<br></p>',
                'updated_at' => '2020-06-28 07:01:31',
            ),
            190 =>
            array (
                'category' => 1,
                'created_at' => '2020-06-28 07:05:40',
                'difficulty' => 2,
                'id' => 194,
                'problem' => '<p>What is an ARN?<br></p>',
                'solution' => '<p>An ARN or <u>Amazon Resource Name</u> is simply a unique name that identifies your AWS clod resources.<br><br><br>More information about <a href="https://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html" target="_blank">Amazon Resource Names can be found in the Amazon documentation</a>.<br></p>',
                'updated_at' => '2020-06-28 07:05:40',
            ),
            191 =>
            array (
                'category' => 9,
                'created_at' => '2020-07-08 07:38:24',
                'difficulty' => 3,
                'id' => 195,
                'problem' => '<p>How would you go about having the EC2 instances in a VPC use your own DNS servers rather than the default AWS DNS service? <br></p>',
                'solution' => '<p> Create a new set of DHCP option set, add the <u>domain-name-servers</u> option and the IP addresses of up to four DNS servers. <br><br><br>Save the option set then assign to your VPC.<br><br><br>More information about <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_DHCP_Options.html" target="_blank">DHCP Option Sets can be found in the AWS documentation</a>.<br></p>',
                'updated_at' => '2020-07-08 07:38:24',
            ),
            192 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-08 07:45:24',
                'difficulty' => 4,
                'id' => 196,
                'problem' => '<p>What service can be used to identify running EC2 instances with insecure services like Telnet, rlogin etc?<br></p>',
                'solution' => '<p><b>AWS inspector </b>can be used to keep an eye on your running instances for insecure services.<br><br><br>More information can be <a href="https://docs.aws.amazon.com/inspector/latest/userguide/inspector_introduction.html" target="_blank">found on using AWS Inspector here</a>.<br></p>',
                'updated_at' => '2020-07-08 07:45:24',
            ),
            193 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-08 07:50:17',
                'difficulty' => 5,
                'id' => 197,
                'problem' => '<p>In the AWS KMS service a customer managed key can be automatically rotated how often?<br></p>',
                'solution' => '<p>When automatic key rotation is enabled for a customer managed CMK in KMS. The key material is <b>rotated once a year</b>.</p><p><br></p><p>More information on automatic key rotation can be found in the <a href="https://docs.aws.amazon.com/inspector/latest/userguide/inspector_introduction.html" target="_blank">AWS documentation</a>.<br></p>',
                'updated_at' => '2020-07-08 07:50:17',
            ),
            194 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-08 07:53:34',
                'difficulty' => 5,
                'id' => 198,
                'problem' => '<p>How often is the key material rotated for an Amazon managed CMK in the AWS KMS service?<br></p>',
            'solution' => 'The key material for Amazon managed a CMK is automatically rotated every 3 years ( 1095 days ).<br><br><br>More information on KMS key rotation can be found in the <a href="https://docs.aws.amazon.com/kms/latest/developerguide/rotate-keys.html" target="_blank">KMS Developer Guide</a>.<br>',
                'updated_at' => '2020-07-08 07:53:34',
            ),
            195 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-09 04:17:59',
                'difficulty' => 4,
                'id' => 199,
                'problem' => '<p>What AWS services do not require prior permission from AWS for penetration testing?<br></p>',
                'solution' => '<p>EC2 instances, NAT Gateways, ELB, RDS, CloudFront, Amazon Aurora, Lambda and API Gateway. <br><br>Along with resources created by <b>Lightsail and Elastic Beanstalk</b> services.<br><br><br>More information about pen testing <a href="https://aws.amazon.com/security/penetration-testing/" target="_blank">AWS services can be found in the documentation</a>.<br></p>',
                'updated_at' => '2020-07-09 04:17:59',
            ),
            196 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 02:47:10',
                'difficulty' => 5,
                'id' => 200,
                'problem' => 'How can you delete an Amazon managed CMK in KMS?<br>',
                'solution' => '<p>You <u>cannot delete a Amazon managed CMK</u>. <br><br><br>If the ability to delete a CMK is required you will need to use a Customer Managed CMK.</p><p><br></p><p> <br></p>',
                'updated_at' => '2020-07-11 02:47:10',
            ),
            197 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 03:10:10',
                'difficulty' => 5,
                'id' => 201,
                'problem' => '<p>In a AWS KMS Key Policy what condition is used to limit the AWS services that are allowed to interact with a key? <br></p>',
                'solution' => '<p>The <b>ViaService</b> condition is used in a CMK policy to limit the AWS services that are allowed to interact with a key.<br><br><br>More information about CMK policy conditions can be found in the <a href="https://docs.aws.amazon.com/kms/latest/developerguide/policy-conditions.html#conditions-kms-via-service" target="_blank">KMS developer guide</a>.<br></p>',
                'updated_at' => '2020-07-11 21:26:06',
            ),
            198 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 21:28:54',
                'difficulty' => 4,
                'id' => 202,
                'problem' => '<p>What is a resource based policy attached to an AWS KMS CMK called?<br></p>',
                'solution' => '<p>A <b>key policy</b> is a resource policy that defines how a KMS key can be used.</p><p><br></p><p>More information on key policies can be found in the <a href="https://docs.aws.amazon.com/kms/latest/developerguide/key-policies.html" target="_blank">AWS KMS developer guide</a>. <br></p>',
                'updated_at' => '2020-07-11 21:28:54',
            ),
            199 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 21:33:18',
                'difficulty' => 2,
                'id' => 203,
            'problem' => 'A policy attached to an IAM identity ( role, user, group ) is called a __________ policy?<br>',
            'solution' => '<p>Policies attached to IAM Identities are known as <u>identity-based policies</u> (or IAM policies).<br></p><p><br><br>More information about <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/access_policies_identity-vs-resource.html" target="_blank">identity based policies vs resource based polices</a> can be found in the IAM user guide.<br></p>',
                'updated_at' => '2020-07-11 21:33:55',
            ),
            200 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 21:48:02',
                'difficulty' => 5,
                'id' => 204,
                'problem' => '<p>How can you allow the use of an AWS KMS key across AWS accounts?<br></p>',
                'solution' => '<p>You must include the <u>root principal of a trusted account within the CMK key policy</u>.<br><br><br><br>More information on using a KMS CMK across <a href="https://docs.aws.amazon.com/kms/latest/developerguide/key-policy-modifying-external-accounts.html" target="_blank">AWS accounts can be found in the user guide</a>.<br></p>',
                'updated_at' => '2020-07-11 21:48:02',
            ),
            201 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 21:56:35',
                'difficulty' => 5,
                'id' => 205,
                'problem' => '<p>What benefit does including an "encryption context" with your cryptographic operations in KMS give? <br></p>',
                'solution' => '<p>An encryption context is a key value data pair that adds additional contextual information about the
data and allows more control of key operations. The context itself is not encrypted and will be logged in CloudTrail.<br><br><br>More information about how encryption contexts are used can be <a href="https://docs.aws.amazon.com/kms/latest/developerguide/concepts.html#encrypt_context" target="_blank">found in the AWS KMS developer guide</a>.<br></p>',
                'updated_at' => '2020-07-11 22:00:09',
            ),
            202 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 22:16:18',
                'difficulty' => 5,
                'id' => 206,
                'problem' => '<p>What is the maximum amount of data that can be directly encrypted using an AWS KMS CMK?<br></p>',
            'solution' => '<p>A CMK can be used for encryption operations but they cannot accept more than 4 KB (4096 bytes) of
data. The CMK is normally used to securely store data keys, which can then be used to encrypt application data of any size.<br><br><br>More information the use of <a href="https://docs.aws.amazon.com/kms/latest/developerguide/programming-encryption.html" target="_blank">KMS CMK\'s can be found in the developer guide</a>.<br></p>',
                'updated_at' => '2020-07-11 22:16:18',
            ),
            203 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 22:20:23',
                'difficulty' => 4,
                'id' => 207,
                'problem' => '<p>What is a KMS CMK?<br></p>',
            'solution' => '<p>A <em>customer master key</em> (CMK) is a logical representation of a master key. The CMK includes metadata, such
as the key ID, creation date, description, and key state.
The CMK also contains the key material used to encrypt and decrypt data.
<br><br><br>More information about <a href="https://docs.aws.amazon.com/kms/latest/developerguide/concepts.html#master_keys" target="_blank">customer master keys can be found in the KMS developer guide</a>.<br></p>',
                'updated_at' => '2020-07-11 22:20:23',
            ),
            204 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 22:42:42',
                'difficulty' => 4,
                'id' => 208,
                'problem' => '<p>What condition can be used in an S3 bucket policy to ensure uploaded objects are encrypted?<br></p>',
                'solution' => '<p>The <b>x-amz-server-side-encryption</b> condition is used to enforce encryption of uploaded objects to a bucket.<br><br><br>More information on the x-amz-server-side-encryption <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/UsingServerSideEncryption.html" target="_blank">condition can be found in the S3 documentation</a>.<br></p>',
                'updated_at' => '2020-07-11 22:42:42',
            ),
            205 =>
            array (
                'category' => 3,
                'created_at' => '2020-07-11 22:46:36',
                'difficulty' => 1,
                'id' => 209,
                'problem' => '<p>What is maximum allowed size for an object in S3?<br></p>',
                'solution' => '<p>The maximum size allowed for a single object is 5TB.<br><br><br>More information can be <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/UploadingObjects.html" target="_blank">found in the AWS documentation</a>.<br></p>',
                'updated_at' => '2020-07-11 22:46:36',
            ),
            206 =>
            array (
                'category' => 3,
                'created_at' => '2020-07-11 22:49:22',
                'difficulty' => 3,
                'id' => 210,
                'problem' => '<p>What is the largest file that can be uploaded to S3 in a single PUT operation?<br></p>',
                'solution' => '<p>Objects up to <u>5GB in size</u> can be uploaded to S3 in a single PUT operation.<br><br><br>More information on S3 constraints can be <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/UploadingObjects.html" target="_blank">found in the documentation</a>.<br></p>',
                'updated_at' => '2020-07-11 22:49:22',
            ),
            207 =>
            array (
                'category' => 3,
                'created_at' => '2020-07-11 22:53:11',
                'difficulty' => 3,
                'id' => 211,
                'problem' => '<p>Multipart uploads to S3 should be considered when dealing with objects larger than?<br></p>',
                'solution' => '<p>Multipart uploads should be considered for files <u>larger than 100MB</u>.<br><br><br>More information on multipart uploads <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/uploadobjusingmpu.html" target="_blank">can be found in the S3 documentation</a>.<br></p>',
                'updated_at' => '2020-07-11 22:53:11',
            ),
            208 =>
            array (
                'category' => 10,
                'created_at' => '2020-07-11 23:05:43',
                'difficulty' => 5,
                'id' => 212,
                'problem' => '<p>Why should you consider disabling a KMS CMK before deleting?<br></p>',
                'solution' => '<p>To ensure you still have access to all data. Deleting a key must be very carefully thought out. <u>Data cannot be decrypted</u> if the corresponding CMK has been deleted.</p><p><br></p><p>More information on CMK deletion can be <a href="https://docs.aws.amazon.com/kms/latest/developerguide/deleting-keys.html" target="_blank">found in the KMS documentation</a>.<br></p>',
                'updated_at' => '2020-07-11 23:05:43',
            ),
            209 =>
            array (
                'category' => 3,
                'created_at' => '2020-07-11 23:13:46',
                'difficulty' => 3,
                'id' => 213,
                'problem' => '<p>What are the two options for encrypting objects in your S3 buckets at rest? <br></p>',
            'solution' => '<ul><li><span><span>AES-256 - Server Side Encryption with AWS managed keys ( SSE-S3 ).<br></span></span></li></ul><p><span><span><br></span></span></p><ul><li>AWS-KMS - Server Side Encryption with keys stored in AWS KMS service.<span><span><br><br></span></span></li></ul><p><br></p><p>More information on S3 bucket encryption can be <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/bucket-encryption.html" target="_blank">found in the documentation</a>.<span><span><br></span></span></p>',
                'updated_at' => '2020-07-11 23:16:23',
            ),
            210 =>
            array (
                'category' => 3,
                'created_at' => '2020-07-11 23:22:13',
                'difficulty' => 3,
                'id' => 214,
                'problem' => '<p>How would you keep a record of any requests made to an S3 bucket?<br></p>',
                'solution' => '<p>You must enable <span><span class="ng-scope">"<u>Server Access Logging</u>" on your S3 bucket. <br><br><br>More information of the use of server access logging can be <a href="https://docs.aws.amazon.com/AmazonS3/latest/dev/ServerLogs.html" target="_blank">found in the AWS documentation</a>.<br></span></span></p>',
                'updated_at' => '2020-07-11 23:22:13',
            ),
            211 =>
            array (
                'category' => 11,
                'created_at' => '2021-01-30 06:29:15',
                'difficulty' => 3,
                'id' => 215,
                'problem' => '<p>What does the cfn-hup helper script watch for changes?<br></p>',
                'solution' => '<p>The cfn-hup helper script watches a <u>resources metadata</u> for changes.<br><br><br>More information on the cfn-hup helper script can be found in the <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/cfn-hup.html" target="_blank">Cloudformation documentation</a>.<br></p>',
                'updated_at' => '2021-01-30 06:29:15',
            ),
            212 =>
            array (
                'category' => 11,
                'created_at' => '2021-01-30 16:23:53',
                'difficulty' => 2,
                'id' => 216,
                'problem' => '<p>What Cloudformation feature would you use to limit the updates that can be performed on resources in your stack?<br></p>',
                'solution' => '<p>Stack policies are used to limit updates to resources within a stack.<br><br><br>More information on Cloudformation stack policies can be <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/protect-stack-resources.html" target="_blank">found in the user guide</a>.<br></p>',
                'updated_at' => '2021-01-30 16:23:53',
            ),
            213 =>
            array (
                'category' => 11,
                'created_at' => '2021-01-30 16:31:23',
                'difficulty' => 2,
                'id' => 217,
                'problem' => '<p>A Cloudformation "Stack Policy" is defined what markup format?<br></p>',
                'solution' => '<p>Stack policies are written as JSON.<br><br><br>More information on using Cloudformation Stack Policies can be <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/protect-stack-resources.html" target="_blank">found in the user guide</a>.<br></p>',
                'updated_at' => '2021-01-30 16:31:23',
            ),
            214 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-02 09:49:30',
                'difficulty' => 4,
                'id' => 218,
                'problem' => '<p>What are the 3 types of gateway service available with the AWS API Gateway service?<br></p>',
                'solution' => '<ul><li>Private</li><li>Regional</li><li>Edge Optimized<br><br></li></ul><p>More information on the endpoint types can be found in the <a href="https://docs.aws.amazon.com/apigateway/latest/developerguide/api-gateway-api-endpoint-types.html" target="_blank">API Gateway developer guide</a>.<br></p>',
                'updated_at' => '2021-03-02 09:49:30',
            ),
            215 =>
            array (
                'category' => 2,
                'created_at' => '2021-03-10 08:59:24',
                'difficulty' => 3,
                'id' => 219,
                'problem' => '<p>What is the maximum allowed size for instance user data?<br></p>',
                'solution' => '<p>The maximum size for instance user data is <u>16kb before base64 encoding</u>.<br><br><br>More information about working with EC2 instance user data can be <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instancedata-add-user-data.html" target="_blank">found in the EC2 user guide</a>.<br></p>',
                'updated_at' => '2021-03-10 09:00:00',
            ),
            216 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-20 01:14:27',
                'difficulty' => 4,
                'id' => 220,
                'problem' => '<p>When using a Blue / Green deployment strategy which version of the application is the Blue version?<br></p>',
                'solution' => '<p>The version of the application that is <u>currently running</u>.<br><br><br>More information on Blue / Green deployments can be <a href="https://d0.awsstatic.com/whitepapers/AWS_Blue_Green_Deployments.pdf" target="_blank">found in the AWS Whitepaper</a>.<br></p>',
                'updated_at' => '2021-03-20 01:14:27',
            ),
            217 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-20 01:15:48',
                'difficulty' => 4,
                'id' => 221,
                'problem' => '<p>When using a Blue / Green deployment strategy which version of the application is the Green version?</p>',
                'solution' => '<p>The updated version of the application that you would like to deploy.<br><br><br>More information on Blue / Green deployments can be <a href="https://d0.awsstatic.com/whitepapers/AWS_Blue_Green_Deployments.pdf" target="_blank">found in the AWS Whitepaper</a>.<br></p>',
                'updated_at' => '2021-03-20 01:15:48',
            ),
            218 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-21 08:56:41',
                'difficulty' => 4,
                'id' => 222,
                'problem' => '<p>The AWS Firehose service can be used output data to four destinations, what are they?<br></p>',
                'solution' => 'AWS Firehose can output data to S3, Redshift, Amazon Elastic Search and Splunk.<br><br><br>More information about AWS Firehose destinations can be <a href="https://docs.aws.amazon.com/firehose/latest/dev/create-destination.html" target="_blank">found in the developer guide</a>.<br>',
                'updated_at' => '2021-03-21 08:56:41',
            ),
            219 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-21 18:25:54',
                'difficulty' => 5,
                'id' => 223,
                'problem' => '<p>What API call would you use to export the data points associated with a Cloudwatch metric?<br></p>',
                'solution' => '<p>The <b>get-metric-statistics</b> API call is used to export the data points associated with a Cloudwatch metric.<br><br><br>More information on the get-metric-statistics call can be <a href="https://awscli.amazonaws.com/v2/documentation/api/latest/reference/cloudwatch/get-metric-statistics.html" target="_blank">found in the AWS CLI documentation</a>.<br></p>',
                'updated_at' => '2021-03-21 18:25:54',
            ),
            220 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-21 18:49:02',
                'difficulty' => 5,
                'id' => 224,
                'problem' => '<p>What is the maximum number of data points that can be returned from a single call to the Cloudwatch get-metric-statistics API?<br></p>',
                'solution' => '<p>The get-metric-statistics can return a maximum of <u>1440 data points</u>. <br><br><br>If more than 1440 data points are requested an errors will be returned.<br><br><br>More information on the get-metric-statistics API call can be <a href="https://awscli.amazonaws.com/v2/documentation/api/latest/reference/cloudwatch/get-metric-statistics.html" target="_blank">found in the AWS CLI documentation</a>.<br></p>',
                'updated_at' => '2021-03-21 18:49:02',
            ),
            221 =>
            array (
                'category' => 1,
                'created_at' => '2021-03-27 21:46:21',
                'difficulty' => 4,
                'id' => 225,
                'problem' => '<p>Cloudwatch subscription filters can be used to deliver log events to what three AWS destination services?<br></p>',
                'solution' => '<p>Cloudwatch subscription filters can deliver log events to Amazon Kinesis stream, an Amazon Kinesis
Data Firehose stream, or AWS Lambda.<br><br><br>More information on using Cloudwatch subscriptions can be <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/Subscriptions.html" target="_blank">found in the Cloudwatch documentation</a>.<br></p>',
                'updated_at' => '2021-03-27 21:46:21',
            ),
        ));


    }
}
