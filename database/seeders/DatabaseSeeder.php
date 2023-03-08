<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            ['id'=>100,'name'=>'nimal','email'=>'nimal@example.com','password'=>bcrypt('nimal123')],
            ['id'=>101,'name'=>'kamal','email'=>'kamal@example.com','password'=>bcrypt('kamal123')],
        ];
        foreach($users as $user){
            User::insert($user);
        }
        

        $posts=[
            ['id'=>100,'title'=>'Sri Lanka eyes $4.5 bln from profitable, loss-making state asset divestment','brief_discription'=>'ECONOMYNEXT – Sri Lanka expects to raise an ambitious $4.5 billion from selling both profitable and loss-making state-owned enterprises, two officials said, as the crisis-hit nation is desperately looking for foreign inflows to come out of an unprecedented economic crisis.','body'=>'ECONOMYNEXT – Sri Lanka expects to raise an ambitious $4.5 billion from selling both profitable and loss-making state-owned enterprises, two officials said, as the crisis-hit nation is desperately looking for foreign inflows to come out of an unprecedented economic crisis.

            “The list includes Sri Lanka Telecom, Litro Gas, Sri Lankan Catering, Airport Ground handling, Hilton Hotel, and many others,” one source told EconomyNext.
            
            “We are open for negotiations and we will be doing everything in a transparent manner. We will start the divestment process with a sentiment boost after the IMF loan is approved.”
            
            Another source who has the knowledge on the state-enterprise restructuring confirmed the move.
            
            “We estimate to raise around $4.5 billion from selling 14 state firms.”
            
            An Indian private firm has been keen on the loss-making SriLankan Airlines while Qatar is interested in some leisure assets, the second source said.
            
            The divestment of the state assets comes as part of the government’s restructuring process of state sector enterprises.
            
            President Ranil Wickremesighe has strongly said state sector restructuring is a must to reduce burden on the people.
            
            Former Prime Minister Mahinda Rajapaksa-led nationalist Sri Lanka Podujana Peramuna (SLPP) has strongly opposed moves to sell state assets citing such privatization will have negative impacts.
            
            Rajapaksa, when he was the president in 2008, did not extend a 10-year deal between currently loss-making SriLankan Airlines and Dubai-based Emirates after the airline refused seats to Mahinda Rajapaksa, the Sri Lankan president, and 35 officials who were visiting Britain.
            
            Later he ran the local carrier with his brother-in-law as the chairman. However, the Airlines has been operating at a staggering loss since 2008.
            
            Similar to Rajapaksa, many politicians in Sri Lanka have run state-owned enterprises under their ministries with no vision while dumping all their political supporters to earn a salary sometimes without doing anything.
            Rajapaksa and his younger brother Gotabaya Rajapaksa, the former president were ousted from the power due to their wrong economic policies amid public protests. Since then, the SLPP has been backing Wickremesinghe, a pro-liberal politician.
            The SLPP is now silent over the privatization deals.
            Government officials have said restructuring of state-owned enterprises is one of the key conditions for a $2.9 billion IMF loan, which is now expected to be approved by the global lender’s executive board towards the end of this month.
            Selling of state assets has been long opposed by strong trade unionized state-owned enterprises. However, President Wickremesinghe has been stubborn in his policies to move away from the economic crisis. ','image'=>'202303080810download.jpeg','user_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],

            ['id'=>101,'title'=>'King County will save more than $80 million for critical water quality projects with low-interest loans','brief_discription'=>'King County Wastewater Treatment Division will receive $165.3 million in low-interest loans awarded by the state Department of Ecology for two critical projects that protect water quality. The loans will save ratepayers $83.5 million in interest costs.','body'=>'King County Wastewater Treatment Division will save $83.5 million by qualifying for low-interest loans awarded by the state Department of Ecology that will help fund two critical water quality projects.

            The King County Council recently approved the loan agreement, which will provide the Wastewater Treatment Division with $165.3 million for a water quality project along the Lake Washington Ship Canal and financing the new Georgetown Wet Weather Treatment Station, both of which will reduce stormwater pollution.
            
            “These investments are critical to a clean and healthy Puget Sound – now and in the future,” said Wastewater Treatment Division Director Kamuron Gurol. “Our strong track record in financial management allows us to secure excellent financing options including these low-interest loans. This helps get the most mileage we can out of these projects while lowering the burden on ratepayers.”
            
            The Department of Ecology’s Clean Water State Revolving Fund loans apply to two projects:
            
            The Ship Canal Water Quality Project, a partnership with Seattle Public Utilities that will prevent an average of 75 million gallons of polluted stormwater and wastewater from flowing into the Lake Washington Ship Canal, Salmon Bay, and Lake Union each year.
            The Georgetown Wet Weather Treatment Station, which King County began operating in late 2022 and now treats up to 70 million gallons of combined stormwater and wastewater per day during heavy storms to better protect the Duwamish River and Puget Sound.
            Polluted stormwater – runoff that occurs during heavy rainfall – is considered one of the biggest threats to water quality today in King County. It carries toxics – motor oil, metals, pesticides, fertilizer, pet waste, and more – directly into streams, rivers, and Puget Sound. It is contributing to the dramatic decline in native salmon and is threatening the survival of southern resident orcas.
            
            Both projects advance King County’s Strategic Climate Action Plan to prepare the region for climate impacts and the Wastewater Treatment Division’s strategy to reduce and control combined sewer overflows. They are in addition to other projects that are enhancing the region’s wastewater system, making it more reliable and resilient to climate impacts. The Wastewater Treatment Division recently started a decade of improvements at West Point Treatment Plant that will replace pumps and pipes, make seismic upgrades, and provide crews with a more reliable power supply.
            
            Securing low-interest loans is one of several ways the Wastewater Treatment Division minimizes the impacts to ratepayers in addition to careful project planning and cost reduction measures.
            
            King County’s Wastewater Treatment Division protects public health and enhances the environment by collecting and treating wastewater while recycling valuable resources for the Puget Sound region. The division provides wastewater treatment services to 18 cities, 15 local sewer districts, and the Muckleshoot Tribe, including nearly 2 million residents across a 420-square-mile area in King, Snohomish and Pierce counties.','image'=>'202303080812ship-canal-boring-machine.png','user_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],

            ['id'=>102,'title'=>'G-7 Science Academies Call for Actions to Improve Climate Change Decision-Making, Protect Ocean Biodiversity, and Support Well-Being of Older People','brief_discription'=>'WASHINGTON — Today the science academies of the G-7 countries issued three joint statements to their respective governments to inform discussions during the G-7 summit to be held in Hiroshima, Japan, in May, as well as ongoing policymaking. 

            The statements, which were drawn up by the academies under the aegis of the Science Council of Japan, call for strategies to address systemic risks and improve decision-making related to climate change; restore and recover ocean biodiversity; and deliver better health and well-being for aging populations. ','body'=>'WASHINGTON — Today the science academies of the G-7 countries issued three joint statements to their respective governments to inform discussions during the G-7 summit to be held in Hiroshima, Japan, in May, as well as ongoing policymaking. 

            The statements, which were drawn up by the academies under the aegis of the Science Council of Japan, call for strategies to address systemic risks and improve decision-making related to climate change; restore and recover ocean biodiversity; and deliver better health and well-being for aging populations. 
            
            Addressing systemic risks in a changing climate: Science and technology in support of cross-sectoral decision-making [PDF]
            The academies expressed grave concern about three global challenges: the increasing number of climate-related disasters; the COVID-19 pandemic and its global socioeconomic impacts; and the Russian invasion of Ukraine and its exacerbation of climate and health impacts. These three challenges highlight the need for action to reach climate targets, the statement says. It recommends multiple steps, such as increasing support for the improvement of models to project anthropogenic climate change’s impact on economies; establishing cross-sectoral frameworks at the local, national, regional, and global levels to link cutting-edge science with on-site decision-making and action; and enhancing technical cooperation and financial support, especially for the most vulnerable countries with a large resource deficit, in order to pursue shared objectives and take concerted actions. 
            
            Restoration and recovery of the ocean and its biodiversity [PDF]
            To restore and recover the ocean and its biodiversity, it is imperative that the G-7 governments take sustained, coordinated action, the statement says. For example, to shift towards sustainable fishing practices, governments should take measures to end illegal, unreported, and unregulated fishing; control large-scale commercial trawling and deep-sea trawling; and prevent overfishing. Governments should also adopt a comprehensive, ecosystem-based approach to the management of the coastal marine environment, including the effects of agricultural runoff and other land-based pollutants, and establish clear governance structures. 
            
            Delivering better health and well-being of older people through wisdom sharing and innovation [PDF]
            The global population aged 65 and over is expected to increase from 10% currently to 16% by 2050, and the population aged over 80 is expected to triple in the next 30 years. The statement urges action to improve understanding of the complexity of aging biology and the diversity of aging trajectories in order to deliver sustainable solutions to the challenges of global population aging. It also urges the building of a new social support system that promotes successful lives and social participation by older people through a wide range of community-based programs and advanced technologies. Nations should also improve the socioeconomic status and well-being of formal and informal caregivers. 
            
            The U.S. National Academies of Sciences, Engineering, and Medicine are private, nonprofit institutions that provide independent, objective analysis and advice to the nation to solve complex problems and inform public policy decisions related to science, engineering, and medicine. They operate under an 1863 congressional charter to the National Academy of Sciences, signed by President Lincoln. ','image'=>'202303080814new.jpg','user_id'=>101,'updated_at'=>'2023-03-08 09:01:06'],
            ['id'=>103,'title'=>'Foreign Secretary call with French Foreign Minister (6 March 2023)','brief_discription'=>'A joint statement following the Foreign Secretary call with Catherine Colonna, French Minister for Europe and Foreign Affairs.','body'=>'Catherine Colonna, Minister of Europe and Foreign Affairs, and James Cleverly, Secretary of State for Foreign, Commonwealth and Development Affairs, spoke by telephone on 6 March 2023.

            The exchange helped prepare for the 36th Franco-British Summit to be held on 10 March in Paris and will deepen the long-standing bilateral relationship between the two countries by deepening cooperation in a number of areas, including foreign affairs, security and defence, the economy, youth, energy and migration.
            
            In this context, the ministers discussed the major international issues of the day, including joint support for Ukraine in the face of Russian aggression and the defence of the rules-based international order.','image'=>'202303080808wew.jpeg','user_id'=>101,'updated_at'=>'2023-03-08 09:01:06'],
            ['id'=>104,'title'=>'Public survey will help King County develop strategies that reduce food waste, cut greenhouse gas emissions','brief_discription'=>'King County Solid Waste Division invites the public to share feedback about proposed strategies to keep more food waste out of the garbage. An anonymous online survey about food and yard waste management is available starting today.','body'=>'What do you do when good food goes bad? Or when those dinner scraps aren’t suitable for the stock pot? While many in King County can throw their scraps in the compost bins, many do not use or have access to curbside compost pickup. It is currently estimated that more than 20% of what goes to King County’s landfill is food waste, creating potent greenhouse gas emissions when it decomposes.

            To help get more food waste out of the garbage, King County Solid Waste Division is hosting an online survey that starts today and ends April 30. The survey will help the county better understand how residents in different parts of the county manage their garbage and food waste and help inform future policies to reduce food waste going to the landfill, protect the environment, and meet the needs of our communities.
            
            The survey work is part of Re+, King County’s new initiative to reinvent the region’s waste system to significantly cut greenhouse gas emissions and transition to a sustainable economy. Some of the best opportunities for improvement are in food waste.
            
            Businesses and households in King County in 2019 threw out enough edible food to feed everyone in Kirkland – about 92,000 people – for an entire year. Food production requires large amounts of resources, particularly water and energy, while creating significant greenhouse gas emissions. If food is not eaten and ends up at the landfill, its decay can create methane, a potent greenhouse gas.','image'=>'202303080818hg.jpeg','user_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],
            ['id'=>105,'title'=>'UN HRC52: UK statement on behalf of the Sri Lanka Core Group','brief_discription'=>'Statement delivered by the UK Ambassador to the WTO and UN in Geneva, Simon Manley, on behalf of the Sri Lanka Core Group.','body'=>'This statement is by the Sri Lanka Core Group comprising Canada, Malawi, Montenegro, North Macedonia, the UK and the United States.

            We welcome recent commitments with respect to the protection of human rights in Sri Lanka, including those of persons from all religious and ethnic groups. Together with recent efforts at constitutional reform, and initiatives aimed at fostering political inclusion, these provide a basis upon which to build.
            
            We also welcome Sri Lanka’s positive engagement in the Universal Periodic Review process in January. We are keen to assist Sri Lanka in implementing its UPR recommendations.
            
            However, our concerns over heavy-handed responses to peaceful protests remain. Sri Lanka must safeguard the rights to freedom of peaceful assembly and association, and freedom of expression. We call for accountability for any protest-related violence. Civil society has an important part to play in encouraging the protection of human rights and we underline the importance of protecting space for civil society’s important work, including through any future legislation.
            
            We stress the crucial importance of upholding the rule of law and safeguarding representative democracy, including by ensuring the independence of institutions and governance systems. This includes the electoral system, in which maintaining the confidence of Sri Lankans is crucial.
            
            We urge the Sri Lankan authorities to address long-standing impunity and corruption. We also underline the need for good governance, which together with sound economic policies, should better support the prosperity of all Sri Lankans.
            
            Noting commitments made to the Council in September by the Government of Sri Lanka, we emphasise the importance of transitional justice, including promotion of truth and accountability, with the goal of reconciliation and accountability for all communities. We also emphasise the importance of replacing the Prevention of Terrorism Act with legislation that aligns with Sri Lanka’s international obligations.
            
            The Core Group calls on Sri Lanka to work with the High Commissioner and his Office. We remain ready to support Sri Lanka in addressing HRC resolution 51/1.
            
            Thank you.','image'=>'202303080823fhjcj.jpeg','user_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],
        ];
        foreach($posts as $post){
            Post::insert($post);
        }
        

        $comments=[
            ['body'=>'Sri Lanka expects to present an anti-corruption bill to the parliament in coming days, Cabinet Spokesman said, as the island nation has been urged by the International Monetary Fund (IMF) to reduce corruption.','user_name'=>'nimal','user_id'=>100,'post_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'These investments are critical to a clean and healthy Puget Sound – now and in the future. Our strong track record in financial management allows us to secure excellent financing options including these low-interest loans. This helps get the most mileage we can out of these projects while lowering the burden on ratepayers.','user_name'=>'nimal','user_id'=>100,'post_id'=>101,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'To restore and recover the ocean and its biodiversity, it is imperative that the G-7 governments take sustained, coordinated action, the statement says. For example, to shift towards sustainable fishing practices, governments should take measures to end illegal, unreported, and unregulated fishing; control large-scale commercial trawling and deep-sea trawling; and prevent overfishing. Governments should also adopt a comprehensive, ecosystem-based approach to the management of the coastal marine environment, including the effects of agricultural runoff and other land-based pollutants, and establish clear governance structures.','user_name'=>'nimal','user_id'=>100,'post_id'=>102,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'In this context, the ministers discussed the major international issues of the day, including joint support for Ukraine in the face of Russian aggression and the defence of the rules-based international order.','user_name'=>'nimal','user_id'=>100,'post_id'=>103,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'Sri Lanka, in return of the loan, has agreed to reduce corruption vulnerabilities through improving fiscal transparency and public financial management, introducing a stronger anti-corruption legal framework, and conducting an in-depth governance diagnostic, supported by the IMF technical assistance.','user_name'=>'kamal','user_id'=>101,'post_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'We urge the Sri Lankan authorities to address long-standing impunity and corruption. We also underline the need for good governance, which together with sound economic policies, should better support the prosperity of all Sri Lankans.','user_name'=>'kamal','user_id'=>101,'post_id'=>105,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'The Ship Canal Water Quality Project, a partnership with Seattle Public Utilities that will prevent an average of 75 million gallons of polluted stormwater and wastewater from flowing into the Lake Washington Ship Canal, Salmon Bay, and Lake Union each year.','user_name'=>'kamal','user_id'=>101,'post_id'=>101,'updated_at'=>'2023-03-08 09:01:06'],
            ['body'=>'The IMF on Tuesday said that Sri Lanka has now received financing assurances from all major bilateral creditors, which will pave the way for consideration by the IMF’s Board on March 20 the approval of the Staff Level Agreement reached on September 1, 2022 for financing under an Extended Fund Facility','user_name'=>'kamal','user_id'=>101,'post_id'=>100,'updated_at'=>'2023-03-08 09:01:06'],
        ];
        foreach($comments as $comment){
            Comment::create($comment);
        }
            
    }
}
