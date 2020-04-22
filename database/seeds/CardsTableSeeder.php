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
                'id' => 1,
                'category' => 1,
                'problem' => 'The lowest cost EC2 instance type for general purpose workloads?',
                'solution' => 'The T2 family.',
                'created_at' => '2020-04-20 01:07:49',
                'updated_at' => '2020-04-20 01:07:49',
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 1,
                'problem' => 'Maximum size of an AWS S3 object?',
                'solution' => '5TB is the maximum size for an S3 object.',
                'created_at' => '2020-04-20 01:13:13',
                'updated_at' => '2020-04-20 01:13:13',
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 1,
                'problem' => 'What does S3 stand for?',
                'solution' => 'Simple Storage Service',
                'created_at' => '2020-04-20 01:18:35',
                'updated_at' => '2020-04-20 01:18:35',
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 1,
                'problem' => 'What are the 5 pillars of the AWS well architected framework?',
                'solution' => '1. Operational Excellence
2. Security
3. Reliability
4. Performance Efficiency
5. Cost Optimization',
                'created_at' => '2020-04-20 01:21:23',
                'updated_at' => '2020-04-22 05:52:28',
            ),
            4 => 
            array (
                'id' => 5,
                'category' => 1,
                'problem' => 'What is the smallest possible file size for an Amazon S3 object?',
                'solution' => 'The smallest possible object size with S3 is 0 bytes.',
                'created_at' => '2020-04-20 01:55:39',
                'updated_at' => '2020-04-20 01:55:39',
            ),
            5 => 
            array (
                'id' => 6,
                'category' => 2,
                'problem' => 'What are the main attributes of a "Clustered" placement group?',
                'solution' => 'All EC2 instances are provisioned in the same availability zone. Use for applications requiring low network latency or high network throughput.',
                'created_at' => '2020-04-21 06:19:20',
                'updated_at' => '2020-04-21 06:19:20',
            ),
            6 => 
            array (
                'id' => 7,
                'category' => 2,
                'problem' => 'What are the attributes of the "Spread" placement group?',
                'solution' => 'Strictly places a small group of instances across distinct underlying hardware to reduce correlated failures.

A spread placement group can also span multiple availability zones.',
                'created_at' => '2020-04-21 06:21:57',
                'updated_at' => '2020-04-21 06:21:57',
            ),
            7 => 
            array (
                'id' => 8,
                'category' => 2,
                'problem' => 'How many types of instance "placement groups" are there?',
                'solution' => 'Three',
                'created_at' => '2020-04-21 06:22:28',
                'updated_at' => '2020-04-22 05:53:00',
            ),
            8 => 
            array (
                'id' => 9,
                'category' => 2,
                'problem' => 'What are the attributes of "partition" placement group?',
                'solution' => 'Instances are grouped into "partitions" of related instances. Each partition is hosted on separate underlying hardware from the other partitions.',
                'created_at' => '2020-04-21 06:27:27',
                'updated_at' => '2020-04-21 06:27:27',
            ),
            9 => 
            array (
                'id' => 11,
                'category' => 2,
                'problem' => '<p>What type of instances can be placed into an "instance placement group"?</p>',
                'solution' => '<p>Instances from the following families can be added to placement groups:</p><br/>
<ul><li>General purpose</li><li>Compute optimized</li><li>Memory optimized</li><li>Storage optimized</li><li>Accelerated computing        </li></ul><br/><p>Full details can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html#placement-groups-limitations-cluster" target="_blank">Amazon docs</a>.</p>',
                'created_at' => '2020-04-21 08:25:00',
                'updated_at' => '2020-04-21 08:25:00',
            ),
            10 => 
            array (
                'id' => 12,
                'category' => 4,
            'problem' => '<p>What other AWS services can the web application firewall ( WAF ) be used with?</p>',
            'solution' => '<p>The AWS WAF service can be used with the following services:</p><br/><ul><li>Cloudfront</li><li>Application Load Balancer ( ALB )</li><li>API Gateway</li></ul><br/><p>More details can be found in the <a href="https://aws.amazon.com/waf/faqs/" target="_blank">WAF FAQ</a>.</p>',
                'created_at' => '2020-04-21 08:35:50',
                'updated_at' => '2020-04-21 08:35:50',
            ),
            11 => 
            array (
                'id' => 13,
                'category' => 4,
                'problem' => '<p>What level of the OSI network model does the AWS WAF service operate at?</p>',
                'solution' => '<p>Level 7 - Application.</p>',
                'created_at' => '2020-04-21 08:37:09',
                'updated_at' => '2020-04-21 08:37:09',
            ),
            12 => 
            array (
                'id' => 14,
                'category' => 4,
                'problem' => '<p>Requests blocked by the AWS WAF are returned what HTTP status code?</p>',
                'solution' => '<p>Blocked requests are returned a <a href="https://en.wikipedia.org/wiki/HTTP_403" target="_blank">403 - Forbidden</a> response.</p>',
                'created_at' => '2020-04-21 08:43:31',
                'updated_at' => '2020-04-21 08:43:31',
            ),
            13 => 
            array (
                'id' => 15,
                'category' => 4,
                'problem' => '<p>What are the three behaviors are available for requests in the AWS WAF service?&nbsp;</p>',
                'solution' => '<p>1. Block all requests except for those specified.</p><br/><p>2. Allow all requests except for those specified.</p><br/><p>3. Count the number of requests matching a specified rule.</p>',
                'created_at' => '2020-04-21 08:46:47',
                'updated_at' => '2020-04-21 08:46:47',
            ),
            14 => 
            array (
                'id' => 16,
                'category' => 2,
                'problem' => '<p>What are the five EC2 pricing models?</p>',
                'solution' => '<ul><li>On Demand</li><li>Reserved</li><li>Spot</li><li>Dedicated Hosts</li><li>Savings Plans</li></ul><br /><p>More information on each can be found on the <a href="https://aws.amazon.com/ec2/pricing/" target="_blank">E2 pricing page</a>.</p>',
                'created_at' => '2020-04-22 00:32:52',
                'updated_at' => '2020-04-22 00:32:52',
            ),
            15 => 
            array (
                'id' => 17,
                'category' => 2,
                'problem' => '<p>If a Spot EC2 instance is terminated by AWS after running for less than an hour. How will you be billed for the usage?</p>',
                'solution' => '<p>You only be charged for a partial hour of usage as the instance was terminated by AWS.<br><br>But if you terminate the instance yourself you will be charged the full hour usage.<br><br>More information on how EC2 spot instances are billed can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/spot-interruptions.html#billing-for-interrupted-spot-instances" target="_blank">user guide</a>.</p>',
                'created_at' => '2020-04-22 00:42:34',
                'updated_at' => '2020-04-22 00:42:34',
            ),
            16 => 
            array (
                'id' => 18,
                'category' => 2,
                'problem' => '<p>What happens to the volume on an EBS backed instance, when the EC2 instance is terminated?</p>',
                'solution' => '<p>By default the EBS volume will also be deleted unless the&nbsp;<font color="#f60e0e" style="">createDeletionOnTermination</font> flag is set to false.<br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/terminating-instances.html#preserving-volumes-on-termination" target="_blank">AWS Documentation</a>.</p>',
                'created_at' => '2020-04-22 00:52:13',
                'updated_at' => '2020-04-22 00:52:13',
            ),
            17 => 
            array (
                'id' => 19,
                'category' => 2,
                'problem' => '<p>Can you encrypt the root EBS volume of an EC2 instance?</p>',
                'solution' => '<p>Yes encryption is now available on root volumes as well as other EBS volumes that are not used for boot.<br><br>You can find more details on the <a href="https://aws.amazon.com/about-aws/whats-new/2019/05/with-a-single-setting-you-can-encrypt-all-new-amazon-ebs-volumes/" target="_blank">AWS blog</a> or <a href="https://aws.amazon.com/ebs/features/#Amazon_EBS_encryption_and_AWS_Identity_and_Access_Management" target="_blank">documentation</a>.</p>',
                'created_at' => '2020-04-22 00:58:15',
                'updated_at' => '2020-04-22 00:58:15',
            ),
            18 => 
            array (
                'id' => 20,
                'category' => 2,
                'problem' => '<p>With an EC2 security group what traffic is allowed by default?</p>',
                'solution' => '<p>All inbound traffic is denied.<br></p><p><br>All outbound traffic from instances in the security group is allowed.</p>
<br />
<p>More details can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-security-groups.html#security-group-rules" target="_blank">AWS documentation</a>.</p>',
                'created_at' => '2020-04-22 01:04:36',
                'updated_at' => '2020-04-22 01:04:36',
            ),
            19 => 
            array (
                'id' => 21,
                'category' => 1,
                'problem' => '<p>How long do you need to wait for a change to a security group to take effect?&nbsp;</p>',
                'solution' => '<p>All changes made to security groups take effect immediately.</p>',
                'created_at' => '2020-04-22 01:06:10',
                'updated_at' => '2020-04-22 01:06:10',
            ),
            20 => 
            array (
                'id' => 22,
                'category' => 2,
                'problem' => '<p>Are EC2 security groups "Stateful" or "Stateless"?</p>',
                'solution' => '<p>Security groups are considered stateful unlike VPC NACLs that require ports open for both inbound and outbound traffic.<br><br>More information on security groups can be found in the <a href="https://docs.aws.amazon.com/vpc/latest/userguide/VPC_SecurityGroups.html#VPCSecurityGroups" target="_blank">VPC documentation</a>.</p>',
                'created_at' => '2020-04-22 01:17:06',
                'updated_at' => '2020-04-22 01:17:06',
            ),
            21 => 
            array (
                'id' => 23,
                'category' => 2,
                'problem' => '<p>How can you block an IP address using EC2 security groups?</p>',
                'solution' => '<p>You cannot block requests via IP address using a security group. </p><p>A VPC NACL or AWS WAF rule must be used instead. Security Groups only allow the flow of inbound traffic they do not deny it.</p><p><br></p>',
                'created_at' => '2020-04-22 01:23:58',
                'updated_at' => '2020-04-22 01:23:58',
            ),
            22 => 
            array (
                'id' => 24,
                'category' => 2,
                'problem' => '<p>What are the three types of network interface available for an EC2 instance?</p>',
            'solution' => '<ul><li>Elastic Network Adapter - ENI: Used for general purpose networking ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-eni.html" target="_blank">more information</a> ).<br><br></li><li>Enhanced networking - EN: Offers high speed network performance between 10 - 100 Gps ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/enhanced-networking.html" target="_blank">more information</a> ).<br><br></li><li>Elastic Fabric Connector ENA - Used to accelerate High Performance Computing (HPC) and machine learning applications ( <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/efa.html" target="_blank">more information</a> ).</li></ul>',
                'created_at' => '2020-04-22 01:38:46',
                'updated_at' => '2020-04-22 01:38:46',
            ),
            23 => 
            array (
                'id' => 25,
                'category' => 2,
                'problem' => '<p>How do you retrieve metadata about a running instance?</p>',
                'solution' => '<p>Execute <strong>curl http://169.254.169.254/latest/meta-data/</strong> from your instance or install the instance metadata tool.</p>

<br />
<p>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instancedata-data-retrieval.html" target="_blank">AWS documentation</a>.</span></p>',
                'created_at' => '2020-04-22 01:46:56',
                'updated_at' => '2020-04-22 01:46:56',
            ),
            24 => 
            array (
                'id' => 26,
                'category' => 1,
                'problem' => 'Can an EC2 placement group cover multiple availability zones?',
                'solution' => '<p>Yes, for Partitioned and Spread placement groups but Clustered placement groups cannot.<br><br>More information can be found in the <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/placement-groups.html" target="_blank">AWS documentation</a>.</p>',
                'created_at' => '2020-04-22 02:04:13',
                'updated_at' => '2020-04-22 02:04:13',
            ),
        ));
        
        
    }
}