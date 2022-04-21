<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perspectives')->insert([
            ['id' => 1, 'perspective_category_id' => 1, 'code' => 'F1', 'name'=> 'Strategic and Sustainable Financial Management', 'year_implemented' => 2022],
            ['id' => 2, 'perspective_category_id' => 3, 'code' => 'P3', 'name'=> 'Efficient Management of Data-Driven Decision Making', 'year_implemented' => 2022],
            ['id' => 3, 'perspective_category_id' => 3, 'code' => 'P4', 'name'=> 'Market- and Industry-Driven Curriculum', 'year_implemented' => 2022],
            ['id' => 4, 'perspective_category_id' => 3, 'code' => 'P1', 'name'=> 'Quality Management System', 'year_implemented' => 2022],
            ['id' => 5, 'perspective_category_id' => 3, 'code' => 'P2', 'name'=> 'Highly Effective Marketing through Innovative Channels', 'year_implemented' => 2022],
            ['id' => 6, 'perspective_category_id' => 4, 'code' => 'L1', 'name'=> 'Competent Talent with Business Acumen and Strong UTMSPACE Values', 'year_implemented' => 2022],
            ['id' => 7, 'perspective_category_id' => 4, 'code' => 'L2', 'name'=> 'Competent Talent with Business Acumen and Strong UTMSPACE Values', 'year_implemented' => 2022],
            ['id' => 8, 'perspective_category_id' => 4, 'code' => 'L3', 'name'=> 'Effective Information System and Technologies', 'year_implemented' => 2022],
            ['id' => 9, 'perspective_category_id' => 2, 'code' => 'S2', 'name'=> 'Wider access to education', 'year_implemented' => 2022],
            ['id' => 10, 'perspective_category_id' => 2, 'code' => 'S1', 'name'=> 'Marketable and professional graduates preferred by employers', 'year_implemented' => 2022],
        ]);

        DB::table('kpis')->insert([
            ['perspective_id' => 1, 'code' => 'F1.1', 'name' => 'Percentage cost reduction from actual operational cost targeted in annual budget ', 'od'=> 'The total of 5% reduction to the operational cost target per unit/department', 'target' => 5],
            ['perspective_id' => 1, 'code' => 'F1.2', 'name' => 'Total revenue from UTMSPACE core products (RM)', 'od'=> 'The total amount of revenue received (annually)', 'target' => 52000000],
            ['perspective_id' => 1, 'code' => 'F1.3', 'name' => 'Total net profit (RM)', 'od'=> 'Net profit before tax (RM million)', 'target' => 3000000],
            ['perspective_id' => 1, 'code' => 'F1.4', 'name' => 'Total Contribution (direct & indirect) to UTM (RM)', 'od'=> 'The amount of contribution (direct & indirect) to UTM (annually)', 'target' => 10000000],
            ['perspective_id' => 1, 'code' => 'F1.5', 'name' => 'Total annual income from investment', 'od'=> 'The cost of Investment per Net Return on Investment', 'target' => 600000],
            ['perspective_id' => 2, 'code' => 'P3.2', 'name' => 'Percentage utility of digital T&L tools & platforms ', 'od'=> 'The number of active users divided by total registered users of T&L digital platforms ', 'target' => 90],
            ['perspective_id' => 3, 'code' => 'P4.2', 'name' => 'Number of new customised digital programmes', 'od'=> 'The number of new customised digital programmes offered', 'target' => 10],
            ['perspective_id' => 4, 'code' => 'P1.1', 'name' => 'Percentage of NCR closed in quality audit', 'od'=> 'The number of NCR closures against the total NCR reported from a quality audit', 'target' => 100],
            ['perspective_id' => 5, 'code' => 'P2.3', 'name' => 'Number of followers on UTMSPACE digital marketing mediums / platforms ', 'od'=> 'The number of new and current visitors to the marketing platforms (i.e., marketing platform = UTMSPACE official Facebook, website, and Instagram)', 'target' => 350000],
            ['perspective_id' => 5, 'code' => 'P2.4', 'name' => 'Number of open days / events where UTMSPACE brand is introduced', 'od'=> 'The number of events conducted for brand promotion & visibility', 'target' => 12],
            ['perspective_id' => 2, 'code' => 'P3.1', 'name' => 'Number of Research Transformation Projects', 'od'=> 'The number of UTMSPACE project grants completed  ', 'target' => 5],
            ['perspective_id' => 5, 'code' => 'P2.6', 'name' => 'Number of global analytic platforms/tools', 'od'=> 'The number of new platforms/tools provided for data analytics.', 'target' => 2],
            ['perspective_id' => 3, 'code' => 'P4.1', 'name' => 'Number of new customised programmes', 'od'=> 'The number of new customised programmes offered', 'target' => 2],
            ['perspective_id' => 5, 'code' => 'P2.1', 'name' => 'Number of new intake', 'od'=> 'The number of student applications divided by total number of offer letters.', 'target' => 2000],
            ['perspective_id' => 5, 'code' => 'P2.2', 'name' => 'Percentage of conversion rate ', 'od'=> 'The number of total students registered divided by total number of offer letter', 'target' => 50],
            ['perspective_id' => 5, 'code' => 'P2.5', 'name' => 'Percentage of alumni engaged in UTMSPACE academic & continuing education products', 'od'=> 'The number of alumni attending engagement events for continuing education, against the total number of alumni', 'target' => 80],
            ['perspective_id' => 2, 'code' => 'P3.3', 'name' => 'Percentage fund spent of annual target on students well-being', 'od'=> 'The amount of fund spent on students well-being from the total annual budget allocation.', 'target' => 80],
            ['perspective_id' => 6, 'code' => 'L1.1', 'name' => 'Percentage of staff competency level', 'od'=> 'The number of employee achieved training provided divided by total number of employees (i.e., training = inclusive 4 categories 1) Scientific/Technical, 2) Technology, 3) Management, and 4) Leadership & Personal Development Training)', 'target' => 80],
            ['perspective_id' => 6, 'code' => 'L1.2', 'name' => 'Percentage development workforce future-proof', 'od'=> 'Percentage completion of development plan milestone on the  strategic workforce plan', 'target' => 80],
            ['perspective_id' => 7, 'code' => 'L2.1 (a)', 'name' => 'Percentage of HR analytics in staff happiness', 'od'=> 'The number of positive responses from employees satisfaction surveys divided by total number of employees', 'target' => 80],
            ['perspective_id' => 7, 'code' => 'L2.1 (c)', 'name' => 'Percentage employee satisfaction Index (CQI Control)', 'od'=> 'The number of positive responses from employees satisfaction surveys divided by total number of employees', 'target' => 90],
            ['perspective_id' => 7, 'code' => 'L2.1 (b)', 'name' => 'Percentage employee satisfaction Index (CQI Control)', 'od'=> 'The number of positive responses from employees satisfaction surveys divided by total number of employees', 'target' => 90],
            ['perspective_id' => 8, 'code' => 'L3.1', 'name' => 'Percentage strategic initiative implementation', 'od'=> 'The number of SI implemented divided by total SI (i.e., SI implemented = achieved more than 50% performance)', 'target' => 90],
            ['perspective_id' => 8, 'code' => 'L3.2', 'name' => 'Percentage completion of developing data management system ', 'od'=> 'Percentage completion of planned milestone of data management system development', 'target' => 70],
            ['perspective_id' => 9, 'code' => 'S2.1', 'name' => 'Customer Satisfaction Index ', 'od'=> '"The satisfaction index of a product/service  offerings (positive and negative perceptions) based on customer survey. (i.e., score ranges from 0-100)"', 'target' => 85],
            ['perspective_id' => 9, 'code' => 'S2.2 (a)', 'name' => 'Number of student enrolment – academic products (PPI, PPD, PPSM, PPK)', 'od'=> 'The number of active and returning students per semester per year', 'target' => 10000],
            ['perspective_id' => 9, 'code' => 'S2.3', 'name' => 'Percentage progress of development plan on new tools in digital learning', 'od'=> 'Percentage completion of the development plan milestone', 'target' => 50],
            ['perspective_id' => 10, 'code' => 'S1.3', 'name' => 'Percentage progress of Development Plan on home-grown product enhancement', 'od'=> 'Percentage completion of the development plan milestone', 'target' => 80],
            ['perspective_id' => 10, 'code' => 'S1.2 (a)', 'name' => 'Number of new smart partnership agreements', 'od'=> '"The number of participants enrolled for the two (2) continuous semesters for the academic programme approved, or six (6) programmes per year for the short  course/training programme offered', 'target' => 5],
            ['perspective_id' => 9, 'code' => 'S2.2 (b)', 'name' => 'Number of student enrolment – continuing education products (PSH)', 'od'=> 'The number of total students registered for short courses and professional development programmes', 'target' => 8000],
            ['perspective_id' => 10, 'code' => 'S1.1', 'name' => 'Percentage of active programmes with partners', 'od'=> 'The number of active partners divided by total number of agreements partnership', 'target' => 80],
            ['perspective_id' => 10, 'code' => 'S1.2 (b)', 'name' => 'Number of new partnership/franchise agreement (International & local)', 'od'=> 'The number of participants enrolled for the two (2) continuous semesters for the academic programme approved, or six (6) programmes per year for the short  course/training programme offered', 'target' => 3],
            ['perspective_id' => 10, 'code' => 'S1.4', 'name' => 'Percentage of UTMSPACE Alumni outreached for engagement programme ', 'od'=> 'The number of engaged alumni measured against the total alumni recorded in database (i.e., Database = Alumni 1,500; Associate 2,000; Provisional 3,000)', 'target' => 80],
        ]);
    }
}
