<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Starting to seed the Articles table');

        DB::table('articles')->truncate();
        $this->command->info('Articles table cleared!');

        Article::create([
            'title' => "As Mozilla talks up Firefox's future, the present is killing it",
            'content' => "Mozilla last week took the unusual step of issuing a short video update on its Firefox browser, declaring it wants to help users get the best out of the Websuggestions that help people find items from their history, places they frequently visit and web content most relevant to them"
        ]);
        Article::create([
            'title' => "US IT job growth remains steady; 2021 poised for record hiring levels",
            'content' => "Today, the jobs situation looks very much like the pre-pandemic state: more positions than candidates. “With reopening, more organizations are actively recruiting,” Janco CEO M. Victor Janulaitis said in a statement. “In full-employment states, there are many positions for IT pros that remain unfilled due to the lack of qualified candidates.”

            That’s put pressure on businesses to increase salaries.
            
            Janco expects 2021 to have greater IT job growth — 108,000 new positions — than in any year since 2015, when 112,500 new positions were created."
        ]);
        Article::create([
            'title' => "Apple’s plan to scan US iPhones raises privacy red flags",
            'content' => "Apple says its system is automated, doesn’t scan the actual images themselves, uses some form of hash data system to identify known instances of child sexual abuse materials (CSAM) and says it has some fail-safes in place to protect privacy.

            Privacy advocates warn that now it has created such a system, Apple is on a rocky road to an inexorable extension of on-device content scanning and reporting that could – and likely, will – be abused by some nations."
        ]);
        Article::create([
            'title' => "Podcast: Google makes its own chip for the Pixel 6, plus how to make hybrid work successful",
            'content' => "Google announced that its new system on a chip, called Tensor, will power the upcoming the Pixel 6 and Pixel 6 Pro phones. Google says Tensor will improve the Pixel's camera system and its speech recognition abilities, among other things. The company's shift away from Qualcomm to Tensor follows Apple's path of making its own silicon. Macworld executive editor Michael Simon and Computerworld executive editor Ken Mingis join Juliet to discuss what this shift means for Google, and how the Pixel 6 will compare to the iPhone 13. Then, Computerworld managing editor for features Val Potter and writer Charlotte Trueman will join the show to explain how to intentionally create a successful hybrid work environment. As companies in some parts of the world craft plans to return to the office, the majority say they will permit hybrid work in some capacity. While companies are now used to employees working remotely, fostering an intentionally hybrid-first work is another strategy entirely. Val, Charlotte and Juliet will discuss how to successfully implement a hybrid-first policy and the consequences of waiting too long to do so."
        ]);
        Article::create([
            'title' => "Cisco takes aim at meeting fatigue with Vidcast",
            'content' => "Cisco this week unveiled its take on asynchronous video, Vidcast, which is designed to help combat meeting fatigue and enable workers to remain productive without the limitations of time zones or calendar clashes."
        ]);
        Article::create([
            'title' => "Noteworthy technology acquisitions 2021",
            'content' => 'As for whether 2021 will maintain last year’s pace, if the first part of the year is anything to go by, there will be no slowing of big deals across the industry, with silicon innovations and collaboration software already proving to be hot areas.

            Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order:'
        ]);
        Article::create([
            'title' => "4 tucked-away takeaways from Google's Pixel 6 preview",
            'content' => "Here, I want to focus on four underemphasized effects of the Pixel 6 preview — a combination of between-the-lines suggestions and offhand remarks that are getting far less attention than the Pixels' shiny outer shells and homemade innards."
        ]);
        Article::create([
            'title' => "Teradici brings Mac-as-a-service to multiple platforms",
            'content' => "Teradici’s solution is likely to be highly significant to some enterprises embracing remote work, as it will enable them to provide Macs to remote or externally based engineering, design, and development groups in a way that protects any content or data held on those machines."
        ]);
        Article::create([
            'title' => "Microsoft details Windows 365 virtual desktop prices: $20 to $162 a month",
            'content' => "Not new as in \"holy-cow-what's-this?,\" Windows 365 is instead a simplified and more automatically scalable version of what had been called Windows Virtual Desktop until June, when it changed its nameplate to Azure Virtual Desktop. That service, though, requires significant experience in deploying and is priced, like most cloud computing, based on resources expended, such as data back and forth, storage allotment, and assigned processors."
        ]);
        Article::create([
            'title' => "Microsoft: Use deadline policies and a 'cloud cadence mindset' for faster patching",
            'content' => "By setting deadline policies, IT admins determine how quickly the update components of Windows should complete the task. According to Microsoft, \"These Windows components adapt their behavioral heuristics based on these deadlines in order to attempt to meet the stated deadline.\""
        ]);
        Article::create([
            'title' => 'Tech event calendar 2021: Upcoming US shows, conferences, and IT expos',
            'content' => "Our sortable chart offers information, dates and locations for a variety of US IT-focused events coming up over the next year."
        ]);
        
        $this->command->info('Articles table seeded successfuly!');

    }
}
