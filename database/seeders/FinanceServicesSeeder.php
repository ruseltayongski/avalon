<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\FinanceServices;

class FinanceServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$this->clearPictures();

        /* Book-to-film/TV */

        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Synopsis',
            'description' => 'A film synopsis is a brief summary of a film storyline, intended to provide an overview of its narrative arc without 
                            giving away key plot twists or the ending. It is like a condensed version of the entire movie, boiled down to its essential elements. The synopsis includes the main characters, the setting, the central conflict, and the basic plot points, but it is careful not to reveal too much so as to maintain the film is intrigue and surprise for viewers.
                            ',
            'service_feature' => 'Brief and Concise<br> 
                                  Introduction of Main Characters<br> 
                                  Setting and Context<br>
                                  Outline of the Plot<br>
                                  Central Conflict<br>
                                  Tone and Genre<br> 
                                  Purpose and Audience<br> 
                                  No Spoilers<br> 
                                  Clarity and Coherence<br>
                                  ',
            'price' => 2000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'The Logline',
            'description' => 'A logline is a brief, concise description of a film, TV show, book, or other narrative work, designed to provide a synopsis of the plot while also capturing the essence of the story in a compelling way. 
                              It is a critical element in the film and television industry, often used to pitch ideas to producers, agents, and executives, and is an essential part of marketing material to attract audiences.
                              ',
            'service_feature' => 'Concise Plot Summary<br> 
                                  Main Character(s)<br> 
                                  Conflict or Challenge<br> 
                                  Unique Selling Point<br> 
                                  Tone and Genre<br> 
                                  Clarity and Precision<br> 
                                  Engaging and Enticing No Spoilers<br>
                                  ',
            'price' => 10000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Storyboard Structure',
            'description' => 'A storyboard is a visual representation of a film, TV show, animation, or any video project, laid out in a series of 
            panels or illustrations. It is a crucial tool used in pre-production for visualizing how the narrative will unfold, scene by scene. 
            The structure of a storyboard is designed to effectively convey the sequence of events, camera angles, motion, and timing within a scene.',
            'service_feature' => 'Sequential Panels<br> 
                                  Visual Representation<br> 
                                  Dialogue and Descriptions<br> 
                                  Camera Angles and Movement<br> 
                                  Scene and Shot Numbers<br> 
                                  Timing Transitions<br> 
                                  Sound and Music Cues<br> 
                                  Emotion and Atmosphere<br> 
                                  Flexibility for Changes<br>
                                  ',
            'price' => 6500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'The Characters',
            'description' => 'Character description in narrative works such as films, novels, or plays is an essential component that provides the audience or readers with insights into the characters
             personalities, appearances, motivations, and roles within the story. Effective character descriptions help in building a connection between the character and the audience, making the story more engaging and relatable',
            'service_feature' => 'Physical Appearance<br> 
                                  Personality Traits<br> 
                                  Background and History<br> 
                                  Role in the Story<br> 
                                  Motivations and Goals<br>  
                                  Relationships with Other Characters<br> 
                                  Change and Development<br>
                                  Dress and Style<br>
                                  Speech and Language<br>
                                  Internal Conflicts<br>
                                  ',
            'price' => 1500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Treatment',
            'description' => 'A film treatment is a detailed, narrative description of a films story, providing a more comprehensive overview than a synopsis or a logline. It is a prose document, 
                              usually written in present tense, that outlines the story of the film from beginning to end, and is often used in the early stages of film development.',
            'service_feature' => 'Length Narrative<br> 
                                  Style Scene Descriptions<br> 
                                  Character Descriptions<br> 
                                  Dialogue Structure<br> 
                                  Tone and Style Purpose<br>
                                  ',
            'price' => 15000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Mood Board',
            'description' => 'A mood board is a visual tool used in various creative fields, including film, design, fashion, and interior decorating, to convey the general style, 
                            tone, and aesthetic of a project. In the context of film production, it plays a crucial role in pre-production, helping to communicate the visual and emotional elements of the film to the team.',
            'service_feature' => 'Visual Compilation<br> 
                                  Conveying Atmosphere<br> 
                                  Inspiration Sources<br> 
                                  Tone and Theme<br> 
                                  Communication Tool<br> 
                                  Idea Development<br> 
                                  Flexibility<br>
                                  Audience and Market<br>
                                  ',
            'price' => 10000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Target Audience',
            'description' => 'The target audience refers to a specific group of people that a product, service, movie, advertisement, or other entity is aimed at appealing to. 
                            This group is defined by certain characteristics such as age, gender, income, interests, or behaviors that make them the most likely consumers or viewers. 
                            In the context of film and media, understanding the target audience is crucial for the success of the project.',
            'service_feature' => 'Demographic Factors<br> 
                                  Psychographic Factors<br> 
                                  Geographic Location<br> 
                                  Behavioral Characteristics<br> 
                                  Niche Markets<br> 
                                  Market Research<br> 
                                  Marketing Strategies<br>  
                                  Impact on Content<br>
                                  ',
            'price' => 800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Screenplay',
            'description' => 'A screenplay is a written work by screenwriters for a film, television show, or video game. 
            These scripts can be original works or adaptations from existing pieces of writing. In them, the movement, actions, expressions, 
            and dialogues of the characters are narrated. A screenplay is like a blueprint for producing a film or television show.',
            'service_feature' => 'Structure Dialogue<br> 
                                  Action Descriptions<br> 
                                  Scene Headings Length<br> 
                                  Character Descriptions<br> 
                                  Formatting Purpose Revisions<br> 
                                  Visual Storytelling<br>
                                  ',
            'price' => 20000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Budget',
            'description' => 'A film budget is a financial plan that outlines the estimated costs for producing a film. 
                            It is a critical document used by producers and filmmakers to secure funding, manage expenses, and guide the production process.',
            'service_feature' => 'Cost Estimation<br> 
                                  Categories of Expenses<br> 
                                  Pre-Production Costs<br> 
                                  Production Costs<br> 
                                  Post-Production Costs<br> 
                                  Contingency Funds<br> 
                                  Size and Scope<br> 
                                  Financial Planning<br> 
                                  Tool Investment Attraction<br> 
                                  Regulatory Compliance<br>
                                  ',
            'price' => 2500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Proposal/Book Motion Picture - Autobiography, Memoir',
            'description' => ' A service to create a film proposal for books in the autobiography or memoir genre.',
            'service_feature' => 'Tailored proposal writing<br>
                                  Market analysis<br>
                                  Adaptation suggestions<br>
                                  Potential casting ideas<br>
                                  ',
            'price' => 11993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Proposal/Book Motion Picture - Non-Fiction, Other Genres',
            'description' => 'Development of a film proposal for non-fiction books in various genres.',
            'service_feature' => 'Proposal crafting<br>
                                  Genre-specific<br> 
                                  Market research<br>
                                  Adaptation strategies<br>
                                  Visual concept outlines<br>
                                  ',
            'price' => 17693.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Film Proposal additional 100 film directors/producers',
            'description' => 'Extension service to pitch the film proposal to an additional 100 film directors and producers.',
            'service_feature' => 'Expanded outreach<br> 
                                  Personalized pitching<br>
                                  Follow-up communications<br>
                                  Network building<br>
                                  ',
            'price' => 3360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Advance Book Trailer 30s',
            'description' => 'Creation of a 30-second advanced book trailer.',
            'service_feature' => 'High-quality video production<br>
                                  Custom graphics<br>
                                  Professional voice-over<br>
                                  Engaging storytelling<br>
                                  ',
            'price' => 1026.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Advance Book Trailer 60s',
            'description' => 'Production of a 60-second advanced book trailer.',
            'service_feature' => 'Extended narrative development<br>
                                  Dynamic visuals<br>
                                  Professional sound design<br>
                                  Tailored branding<br>
                                  ',
            'price' => 1360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Advance Book Trailer 90s',
            'description' => 'Crafting a 90-second advanced book trailer.',
            'service_feature' => 'Comprehensive story arc<br>
                                  Cinematic quality visuals<br>
                                  Custom music score<br>
                                  Impactful messaging<br>
                                  ',
            'price' => 169.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Basic Book Trailer 30s',
            'description' => 'A basic 30-second book trailer production.',
            'service_feature' => ' Standard video production<br>
                                   Basic graphics<br>
                                   Voice-over narration<br>
                                   Straightforward storytelling<br>
                                  ',
            'price' => 460,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Basic Book Trailer 60s',
            'description' => 'Creation of a 60-second basic book trailer.',
            'service_feature' => 'Extended length for narrative<br>
                                  Standard visuals and sound<br>
                                  Basic animation elements<br>
                                  ',
            'price' => 793.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Basic Book Trailer 90s',
            'description' => 'Production of a 90-second basic book trailer.',
            'service_feature' => 'Longer storytelling time<br>
                                  Basic but effective visual effects<br>
                                  Clear engaging narration<br>
                                  ',
            'price' => 1026.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Cinematic Trailer Stand Alone 30-60s',
            'description' => 'Creation of a stand-alone cinematic trailer lasting between 30 to 60 seconds.',
            'service_feature' => 'High-definition video quality<br>
                                  Cinematic storytelling techniques<br>
                                  Custom soundtracks<br>
                                  Dynamic editing<br>
                                  ',
            'price' => 1693.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Cinematic Trailer Stand Alone 120-180s',
            'description' => 'Production of a 120 to 180-second stand-alone cinematic trailer.',
            'service_feature' => 'Extended cinematic narrative<br>
                                  Advanced visual effects<br>
                                  Comprehensive sound design<br>
                                  Engaging scriptwriting<br>
                                  ',
            'price' => 1260,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Cinematic Trailer with submission to film studios and festivals 30-60s',
            'description' => 'A 30-60 second cinematic trailer with submission FinanceServices to film studios and festivals.',
            'service_feature' => 'Trailer production<br>
                                  Submission strategy<br>
                                  Tailored applications to studios and festivals<br>
                                  Follow-up communications<br>
                                  ',
            'price' => 2826.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Cinematic Trailer with submission to film studios and festivals 120-180s',
            'description' => ' A 120-180 second cinematic trailer with submission to various film studios and festivals.',
            'service_feature' => 'Extended trailer production<br>
                                  Comprehensive submission plan<br>
                                  Targeted festival entries<br>
                                  Studio pitches<br>
                                  ',
            'price' => 3360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Cinematic Trailer add-on submission to 100 film directors/producers',
            'description' => 'Additional service to submit the cinematic trailer to 100 film directors and producers.',
            'service_feature' => 'Extensive outreach<br>
                                  Personalized submission packets<br>
                                  Networking opportunities<br>
                                  Follow-up coordination<br>
                                  ',
            'price' => 3360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Animation Trailer - 3mins',
            'description' => 'Production of a 3-minute animation trailer.',
            'service_feature' => 'Custom animation<br>
                                  Voice-over talent<br>
                                  Scriptwriting<br>
                                  Sound design tailored to the books theme<br>
                                  ',
            'price' => 4493.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Animation Trailer - 5mins',
            'description' => 'Crafting a 5-minute animation trailer.',
            'service_feature' => 'Extended narrative scope<br>
                                  High-quality animation<br>
                                  Bespoke character design<br>
                                  Immersive soundtracks<br>
                                  ',
            'price' => 7426.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Book Trailer LIVE ACTION',
            'description' => 'A live-action book trailer is a promotional video for a book that uses 
            real actors and settings to depict scenes or concepts from the book. 
            It is similar to a movie trailer but focused on a book. Here are some key
             features and descriptions for a live-action book trailer',
            'service_feature' => 'Narrative Approach: The trailer often follows a short compelling narrative that gives viewers a taste of the books story, characters, and tone. It is crafted to intrigue and entice potential readers without giving away too much<br>
                                Real Actors and Locations: Unlike animated or graphic-based trailers, a live-action trailer features actors portraying the books characters in real-world settings or sets designed to mimic the books environment<br>
                                Cinematic Quality: High-quality cinematography is used, with attention to camera work, lighting, and sound design, to create an engaging and professional-looking trailer<br>
                                Dialogue and Voice-Over: The trailer may include dialogue taken directly from the book or a voice-over that provides context or teases the plot. The voice-over often poses questions or presents themes that resonate with the books content<br>
                                Mood and Tone: Music, color grading, and editing style are carefully chosen to reflect the mood and tone of the book, whether it is suspenseful, romantic, adventurous, or comedic<br>
                                Direct Book References: The trailer may display the books cover, title, authors name, and critical acclaim or quotes from reviews. This is typically shown towards the end to remind viewers that the visual narrative is tied to a book<br>
                                Call to Action: At the end of the trailer, there is often a call to action, such as prompting viewers to buy the book, visit the authors website, or follow social media channels for more information<br>
                                Duration: Typically, book trailers are short, often ranging between one to three minutes, making them easy to share and consume on social media and other online platforms<br>
                                Target Audience: The content, style, and presentation are tailored to appeal to the books target audience, whether it is young adults, mystery enthusiasts, romance readers, or any other demographic<br>
                                Cross-Promotional Opportunities: Live-action book trailers can also be used for cross-promotion, featuring endorsements from celebrities or tie-ins with other media like movies or TV shows if applicable<br>
                                  ',
            'price' => 12668.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });

        /* Business Affairs */

        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Accounting and Financial FinanceServices',
            'description' => 'These include bookkeeping, tax preparation, auditing, financial analysis, 
            and budgeting FinanceServices. We help businesses manage their finances, comply with regulations, and make informed financial decisions.
            <br><br>Monthly Renewal $800.00',
            'service_feature' => 'Bookkeeping: Accurate record-keeping of financial transactions.<br>
                                  Tax Preparation: Ensuring compliance with tax laws and filing tax returns.<br>
                                  Auditing: Independent examination of financial records.<br>
                                  Financial Analysis: Analyzing financial data to guide business decisions.<br>
                                  Budgeting: Planning future spending and managing resources efficiently.<br>
                                  ',
            'price' => 2000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Legal FinanceServices',
            'description' => 'This encompasses contract drafting and review, intellectual property management, legal consultation, 
            compliance assistance, and dispute resolution. These FinanceServices are crucial for ensuring that a business operates within the legal framework.
            <br><br>Monthly Renewal $1,500.00',
            'service_feature' => 'Contract Drafting and Review: Creating and examining legal agreements.<br>
                                  Intellectual Property Management: Protecting patents, trademarks, and copyrights.<br>
                                  Legal Consultation: Providing expert legal advice.<br>
                                  Compliance Assistance: Ensuring adherence to laws and regulations.<br>
                                  Dispute Resolution: Handling legal disputes through negotiation, mediation, or litigation.<br>
                                  ',
            'price' => 7000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });  
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Marketing and Advertising FinanceServices',
            'description' => 'FinanceServices in this category include market research, brand development, advertising campaigns, social 
            media management, and public relations. They are essential for building brand awareness and attracting customers.
            <br><br>Monthly Renewal $500.00',
            'service_feature' => 'Market Research: Gathering and analyzing data about target markets.<br>
                                                   Brand Development: Creating and strengthening brand identity.<br>
                                                   Advertising Campaigns: Developing and executing promotional strategies.<br>
                                                   Social Media Management: Managing online presence on social media platforms.<br>
                                                   Public Relations: Building and maintaining a positive public image.<br>
                                  ',
            'price' => 1500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Human Resources (HR) FinanceServices',
            'description' => 'HR FinanceServices include recruitment, training and development, payroll management, employee 
                              relations, and performance management. These FinanceServices help in managing the workforce effectively.
            <br><br>Monthly Renewal $1,000.00',
            'service_feature' => 'Recruitment: Sourcing and hiring new employees.<br>
                                  Training and Development: Enhancing employee skills and performance.<br>
                                  Payroll Management: Processing employee payments and benefits.<br>
                                  Employee Relations: Managing interactions and issues among employees.<br>
                                  Performance Management: Evaluating and improving employee performance.<br>
                                  ',
            'price' => 3000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Information Technology (IT) FinanceServices',
            'description' => 'This covers network management, cybersecurity, software development, data analysis, and tech support. 
                              IT FinanceServices are critical for maintaining the technological infrastructure of a business.
            <br><br>Monthly Renewal $1,500.00',
            'service_feature' => 'Network Management: Overseeing computer networks and connectivity.<br>
                                  Cybersecurity: Protecting systems and data from cyber threats.<br>
                                  Software Development: Creating custom software solutions.<br>
                                  Data Analysis: Interpreting complex data sets to inform decisions.<br>
                                  Tech Support: Providing technical assistance to users.<br>
                                  ',
            'price' => 3500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Consulting FinanceServices',
            'description' => 'Business consulting can range from strategy and management consulting to operations, HR, and IT consulting. 
                              These FinanceServices provide expert advice to improve various aspects of business operations.
            <br><br>Monthly Renewal $800.00',
            'service_feature' => 'Strategy Consulting: Advising on business strategy and planning.<br>
                                  Management Consulting: Improving organizational performance.<br>
                                  Operations Consulting: Enhancing efficiency in business processes.<br>
                                  HR Consulting: Advising on human resources management.<br>
                                  IT Consulting: Guiding technology strategy and implementation.<br>
                                  ',
            'price' => 2500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Supply Chain and Logistics FinanceServices',
            'description' => 'These FinanceServices involve inventory management, transportation, warehousing, and distribution. 
                              They are key to ensuring that products are delivered efficiently and on time.
            <br><br>Monthly Renewal $1,800.00',
            'service_feature' => 'Inventory Management: Monitoring and managing stock levels.<br>
                                  Transportation: Planning and executing the movement of goods.<br>
                                  Warehousing: Storing goods before distribution.<br>
                                  Distribution: Delivering products to consumers or retailers.<br>
                                  ',
            'price' => 4500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Customer Support FinanceServices',
            'description' => 'This includes call center operations, customer service training, and feedback management. 
                              Good customer support is vital for maintaining customer satisfaction and loyalty.
            <br><br>Monthly Renewal $1,800.00',
            'service_feature' => 'Call Center Operations: Handling customer inquiries and complaints.<br>
                                  Customer Service Training: Educating staff on customer service best practices.<br>
                                  Feedback Management: Collecting and responding to customer feedback.<br>
                                  ',
            'price' => 5500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Research and Development (R&D) FinanceServices',
            'description' => 'FinanceServices: R&D FinanceServices are crucial for innovation and developing new products or FinanceServices. 
                              They involve market analysis, product design, testing, and implementation.
            <br><br>Monthly Renewal $900.00',
            'service_feature' => 'Market Analysis: Identifying market trends and opportunities.<br>
                                  Product Design: Developing new product concepts.<br>
                                  Testing: Evaluating prototypes and products for viability.<br>
                                  Implementation: Bringing new products or FinanceServices to market.<br>
                                  ',
            'price' => 3800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
            'title' => 'Real Estate FinanceServices',
            'description' => 'These FinanceServices include property management, leasing, buying and selling assistance, 
                              and real estate investment consulting.
            <br><br>Monthly Renewal $1,500.00',
            'service_feature' => 'Property Management: Overseeing and maintaining property operations.<br>
                                  Leasing: Managing rental agreements for properties.<br>
                                  Buying and Selling Assistance: Facilitating real estate transactions.<br>
                                  Real Estate Investment Consulting: Advising on property investments.<br>
                                  ',
            'price' => 4800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });

        /* Tech and Dev */

        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Startup Website (1 Year)',
            'description' => 'A website designed for new businesses, providing a platform to showcase products or FinanceServices, engage with customers, and build an online presence.
            ',
            'service_feature' => 'Custom domain<br>
                                  Responsive design<br>
                                  Basic SEO<br>
                                  Contact form<br>
                                  Up to 5 pages (Home, About, FinanceServices/Products, Blog, Contact)<br>
                                  Social media integration<br>
                                  ',
            'price' => 3526.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Website Additional Page',
            'description' => 'An extra page for an existing website, used to expand content or add a new section.
            ',
            'service_feature' => 'Consistent design with existing site<br>
                                  Content integration<br>
                                  SEO optimization for the new page<br>
                                  Mobile responsive design<br>
                                  ',
            'price' => 593.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Website Renewal/Maintenance',
            'description' => 'Regular updating and maintenance of a website to ensure optimal performance, security, and content relevance.
            ',
            'service_feature' => 'Monthly backups<br>
                                  Security updates<br>
                                  Bug fixes<br>
                                  Content updates (up to a specified limit per month)<br>
                                  Performance optimization<br>
                                  ',
            'price' => 1060,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Website add-on: Blog Article per Blog (600words)',
            'description' => 'A service to provide professionally written blog articles to enhance website content and improve SEO.
            ',
            'service_feature' => '600-word article<br>
                                  Keyword optimization for SEO<br>
                                  Topic research<br>
                                  One round of revisions<br>
                                  Integration into the websites blog section<br>
                                  ',
            'price' => 593.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Website add-on: Blog Article Extra Words',
            'description' => 'Additional words for a blog article, allowing for more in-depth content beyond the standard word count.
            ',
            'service_feature' => 'Extension of a blog article beyond 600 words<br>
                                  Keyword optimization for the additional content<br>
                                  Seamless integration with the original article<br>
                                  ',
            'price' => 1.27,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Splash Page Pro',
            'description' => 'Splash Page Pro is a comprehensive web service package designed for businesses and individuals seeking a robust online presence. Web Hosting: Reliable and secure web hosting FinanceServices, ensuring your website is always accessible and runs smoothly. Domain Registration: Includes the registration of a domain name of your choice (subject to availability), providing a unique and professional web address for your site. Email Accounts: Two personalized email accounts linked to your domain, enhancing your professional image and communication efficiency. Single Page Website: Development of a visually appealing and user-friendly single-page website. This page will be tailored to showcase your business or personal brand effectively, with sections for FinanceServices, about us, contact information, and more. This package is ideal for those who want to establish a professional web presence with minimal hassle, providing all the essential tools in one convenient bundle.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Hosting<br> 
                                Domain<br>
                                Email 2 users<br> 
                                Pages 1<br>
                                  ',
            'price' => 900,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Splash Page Business',
            'description' => 'The "Splash Page Business" package is a comprehensive web service solution designed for businesses looking for a solid and professional online presence. This package includes: SSL Hosting: Secure and reliable web hosting with SSL (Secure Sockets Layer) certification, ensuring data protection and encryption for your website visitors. Domain Registration: A custom domain registration to establish your unique and professional web address. Email Accounts: Provision of five professional email accounts linked to your domain, offering ample communication options for your team. Number of Pages: Creation of up to three web pages. This setup is ideal for clearly segmenting information about your FinanceServices, company background, and contact details. Content: Minimal content creation is included, providing essential text and graphics to convey your business message effectively and professionally. SEO: Basic Search Engine Optimization (SEO) FinanceServices to enhance your websites visibility and ranking on popular search engines, helping potential customers find your site more easily. This "Splash Page Business" package is perfect for businesses aiming to establish a comprehensive and secure online presence with the essentials of modern web design and digital marketing.
            <br><br>Monthly Renewal $280.00',
            'service_feature' => 'SSL<br>
                                  Hosting<br>
                                  Domain<br> 
                                  Email 5 users<br> 
                                  3 number of Pages Content minimal<br> 
                                  SEO minimal<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Splash Page Expertise',
            'description' => 'The "Splash Expertise" package is a tailored web service offering, ideal for businesses and professionals seeking to establish a secure and efficient online presence. This package includes: SSL Hosting: Secure web hosting with SSL certification, ensuring your websites data is encrypted and protected, providing trust and safety for your visitors. Domain Registration: Custom domain registration, allowing you to choose a unique and professional web address that reflects your brands identity. Email Accounts: Three professional email accounts linked to your domain, facilitating effective and credible business communication. Number of Pages: Development of two web pages, perfect for a streamlined presentation of your FinanceServices and contact information, ensuring a concise yet comprehensive user experience. Content: Minimal content creation is included, providing essential and professionally crafted text and graphics to effectively communicate your business core message. SEO: Basic Search Engine Optimization FinanceServices, designed to improve your websites visibility on search engines, making it easier for potential clients to discover your online presence. The "Splash Expertise" package is well-suited for small businesses, freelancers, or professionals looking for a straightforward, yet impactful, online platform to showcase their FinanceServices and connect with their audience.
            <br><br>Monthly Renewal $190.00',
            'service_feature' => 'SSL<br>
                                  Hosting<br> 
                                  Domain<br> 
                                  Email 3 users<br> 
                                  2 number of Pages<br> 
                                  Content minimal<br> 
                                  SEO minimal<br>
                                  ',
            'price' => 1080,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Landing Page Pro',
            'description' => 'The "Landing Page Pro" package is a comprehensive web solution designed for businesses and professionals who need a robust and engaging online presence. This package includes: Hosting: Reliable web hosting FinanceServices, ensuring that your website is fast, secure, and consistently accessible to your audience. Domain Registration: Custom domain registration to provide your site with a unique and professional web address, enhancing your brands identity. Email Accounts: Five professional email accounts linked to your domain. This feature allows for streamlined, branded communication with clients and team members. Number of Pages: Development of up to five distinct web pages. This multi-page setup is ideal for thoroughly detailing your businesss FinanceServices, about us, testimonials, contact information, and more, offering a comprehensive user experience. The "Landing Page Pro" package is perfect for businesses or individuals looking to create a detailed and interactive online presence, with the flexibility to showcase various aspects of their FinanceServices or portfolio across multiple pages.
            <br><br>Monthly Renewal $245.00',
            'service_feature' => 'Hosting<br> 
                                  Domain<br> 
                                  Email 5 users<br>
                                  Pages 5<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Landing Page Business',
            'description' => 'The "Landing Page Business" package is an advanced and fully-featured web solution designed for businesses seeking a comprehensive and impactful online presence. This package includes: SSL: Secure Socket Layer (SSL) encryption for your website, ensuring top-level security and data protection, and building trust with your visitors. Hosting: High-quality web hosting FinanceServices, guaranteeing fast, reliable, and uninterrupted access to your website. Domain Registration: Custom domain registration to establish a unique and professional web address that reflects your brands identity. Email Accounts: A total of 12 professional email accounts linked to your domain, facilitating extensive and branded communication capabilities for a larger team. Number of Pages: Creation of up to 12 detailed web pages. This extensive range allows for a full exploration of your business offerings, including FinanceServices, company background, customer testimonials, contact information, and more. Content: Full content service, providing comprehensive, professionally written text and high-quality graphics that effectively convey your brands message and values. SEO: Full Search Engine Optimization FinanceServices to maximize your websites visibility on search engines. This includes keyword optimization, on-page SEO, backlink strategies, and other techniques to enhance your sites ranking and draw more organic traffic. The Landing Page Business package is ideally suited for medium to large businesses that require a broad and dynamic web presence, complete with all the tools and features needed to stand out in todays digital landscape.
            <br><br>Monthly Renewal $568.00',
            'service_feature' => 'SSL<br> 
                                  Hosting<br> 
                                  Domain<br> 
                                  Email 12 Users<br> 
                                  Pages 12<br> 
                                  Content Full<br> 
                                  SEO Full<br>
                                  ',
            'price' => 6000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Landing Page Expertise',
            'description' => 'Our Landing Page Expertise offers a comprehensive solution for creating a professional online presence with a primary focus on simplicity and essential functionality. Our FinanceServices include: SSL (Secure Sockets Layer) Integration: We ensure the security of your landing page by implementing SSL encryption, providing a secure environment for your visitors data. Hosting FinanceServices: We offer reliable hosting solutions to ensure your landing page is accessible 24/7, with minimal downtime and optimal loading speeds. Domain Registration: We assist you in selecting and registering a domain name that aligns with your brand and objectives, making your landing page easily accessible. Email Setup for 10 Users: We provide email FinanceServices for up to 10 users, helping you establish a professional email communication system that reflects your brand identity. 8 Pages: Our landing page packages include up to 8 individual pages, allowing you to showcase your content, products, or FinanceServices effectively. Minimal Content: We understand the importance of simplicity and clarity. Our design and content approach focuses on conveying your message concisely and effectively, ensuring a seamless user experience. Minimal SEO: While we provide basic SEO optimization to improve your landing pages visibility in search engines, our primary goal is to keep it simple and user-friendly, without overwhelming you with technical SEO intricacies. With our Landing Page Expertise, you can establish an online presence quickly and efficiently, ensuring your visitors have a secure, reliable, and user-friendly experience while promoting your brand or message effectively.
            <br><br>Monthly Renewal $190.00',
            'service_feature' => 'SSL<br> 
                                  Hosting<br> 
                                  Domain<br> 
                                  Email 10 Users<br> 
                                  Pages 8<br> 
                                  Content Minimal<br> 
                                  SEO Minimal<br>
                                  ',
            'price' => 2160,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Strategic Landing Page Pro',
            'description' => 'Introducing our Strategic Landing Page Pro package, designed to provide you with a robust and comprehensive online presence for your business or project. This all-inclusive package includes: SSL (Secure Sockets Layer) Integration: Ensuring the utmost security for your visitors by encrypting data transmission on your landing page, fostering trust and confidence. Hosting FinanceServices: Enjoy reliable and high-performance hosting, ensuring your landing page is accessible 24/7 with minimal downtime and lightning-fast loading speeds. Domain Registration: We assist you in selecting and registering a domain name that perfectly aligns with your brand, making it easy for visitors to find you online. Email Setup for 12 Users: Establish a professional communication system with email FinanceServices for up to 12 users, enhancing your brands credibility and productivity. 12 Pages: Our Strategic Landing Page Pro package includes a generous allowance of up to 12 individual pages, providing ample space to showcase your content, products, or FinanceServices in detail. Whether youre launching a new business, promoting a campaign, or seeking to expand your online presence, our Strategic Landing Page Pro package offers the ideal solution for a comprehensive and effective online strategy. With top-notch security, reliability, and versatility, you can confidently present your brand or message to the world.
            <br><br>Monthly Renewal $568.00',
            'service_feature' => ' SSL<br>
                                Hosting<br>
                                Domain<br>
                                Email 12<br>
                                Pages 12<br>
                                  ',
            'price' => 3000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Strategic Landing Page Business',
            'description' => 'Introducing our Strategic Landing Page Business package, a dynamic solution tailored to meet the diverse needs of your growing enterprise. This comprehensive package includes: SSL (Secure Sockets Layer) Integration: Your landing page is equipped with robust SSL encryption, guaranteeing the highest level of security for your visitors and their data. Hosting FinanceServices: Benefit from reliable and high-performance hosting, ensuring your landing page is always accessible, with minimal downtime and lightning-fast loading speeds. Domain Registration: We assist you in selecting and registering a domain name that perfectly aligns with your brand, making it easy for your audience to find you online. Email Setup for 18 Users: Establish a professional and efficient communication system with email FinanceServices for up to 18 users, enhancing your brands credibility and boosting team collaboration. 18 Pages: Our Strategic Landing Page Business package offers ample room to showcase your content, products, or FinanceServices with up to 18 individual pages, allowing you to provide comprehensive information to your audience. Full Content: We prioritize creating engaging and informative content that tells your brands story and effectively communicates your message. Full SEO Optimization: Maximize your online visibility with our comprehensive SEO optimization FinanceServices, ensuring your landing page ranks well in search engines, driving more organic traffic. Upgradable to Automation: As your business evolves, you can seamlessly upgrade to automation features to streamline processes, enhance user experience, and drive conversions. Elevate your online presence with our Strategic Landing Page Business package, designed to empower your enterprise with security, reliability, comprehensive content, SEO prowess, and the potential for automation as your business continues to thrive and grow.
            <br><br>Monthly Renewal $856.00',
            'service_feature' => 'SSL<br> 
                                Hosting<br> 
                                Domain<br> 
                                Email 18 Users<br> 
                                18 number of Pages<br> 
                                Content Full<br> 
                                SEO Full<br>  
                                Upgradable to Automation<br>
                                  ',
            'price' => 8000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Strategic Landing Page Expertise',
            'description' => 'Introducing our Strategic Landing Page Expertise, a versatile solution for businesses seeking a strong online presence. This package offers essential features and room for growth, including: SSL Integration: Secure your landing page with SSL encryption to build trust and protect user data.  Hosting FinanceServices: Enjoy reliable hosting with minimal downtime and fast loading speeds, ensuring your landing page is accessible at all times. Domain Registration: Let us assist you in selecting and registering a domain name that aligns with your brand, making it easy for visitors to find you online. Email Setup for 15 Users: Enhance communication and professionalism with email FinanceServices for up to 15 users. 15 Pages: Present your content, products, or FinanceServices effectively with up to 15 individual pages, accommodating your business needs. Minimal Content: Embrace a clean and straightforward design, focusing on essential content to engage visitors. Minimal SEO: While providing basic SEO, our focus is on simplicity, ensuring a user-friendly experience without overwhelming technicalities. Upgradable to Automation: As your business grows, seamlessly upgrade to automation features to streamline processes and boost efficiency.Our Strategic Landing Page Expertise package provides a solid foundation for your online presence, with the flexibility to expand and automate as your business evolves. Its the perfect choice for those seeking a straightforward yet scalable solution.
            <br><br>Monthly Renewal $712.00',
            'service_feature' => 'SSL<br>
                                Hosting<br>
                                Domain<br>
                                Email 15 Users<br>
                                15 number of Pages<br>  
                                Content Minimal<br> 
                                SEO minimal<br>   
                                Upgradable to Automation<br>
                                  ',
            'price' => 5000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: SSL',
            'description' => 'Secure Socket Layer certificate for website encryption.
            Ongoing service for maintaining and updating SSL certificates.
            <br><br>Monthly Renewal $10.00',
            'service_feature' => 'Encrypts data transfer<br>
                                Enhances security<br> 
                                Improves SEO rankings<br> 
                                Builds customer trust<br>
                                Regular updates<br>
                                Compliance checks<br>  
                                Ensuring continuous encryption<br>
                                  ',
            'price' => 50,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: Email',
            'description' => 'Professional email FinanceServices tailored for business communications.
            Continuous support and updates for email FinanceServices.
            <br><br>Monthly Renewal $16.00',
            'service_feature' => 'Custom domain emails<br> 
                                Spam filtering<br> 
                                Large storage<br>
                                Secure data transfer<br>
                                Regular security patches<br>
                                Feature upgrades<br>
                                Uptime monitoring<br>
                                  ',
            'price' => 80,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: SEO Min',
            'description' => 'Basic Search Engine Optimization FinanceServices.
            Regular updates and tweaks to maintain and improve SEO performance.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'Keyword optimization<br>
                                Basic website audit<br>
                                Google Analytics integration<br>
                                Ongoing keyword research<br>
                                Content updates<br>
                                Performance tracking<br>
                                  ',
            'price' => 120,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: SEO Full',
            'description' => 'Comprehensive SEO FinanceServices for enhanced online visibility.
            Continuous optimization and updates for full-scale SEO FinanceServices.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'Advanced keyword strategies<br>
                                Full website optimization<br>
                                Backlink building<br>
                                Detailed performance reporting<br>
                                Regular content refinement<br>
                                Backlink analysis<br>
                                Comprehensive performance reviews<br>
                                  ',
            'price' => 280,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: Content Min',
            'description' => 'A basic version of content delivery, focusing on delivering only the essential information.
            Ongoing updates and optimization of minimal content delivery to ensure relevance and efficiency.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'Streamlined content<br>
                            Fast loading times<br>
                            User-friendly interfaces<br>
                            Mobile optimization<br>
                            Content updates<br>
                            Performance optimization<br>
                            Responsiveness improvements<br>
                            SEO enhancement<br>
                                  ',
            'price' => 120,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: Content Full',
            'description' => 'Comprehensive content delivery providing detailed and extensive information.
            Regular updates to ensure the full content remains current, engaging, and informative.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'In-depth content<br>
                                Multimedia integration (images, videos)<br>
                                Interactive elements<br>
                                Comprehensive navigation<br>
                                Content refreshment<br>
                                Multimedia updates<br>
                                Interactivity enhancements<br>
                                User experience improvements<br>
                                  ',
            'price' => 280,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Essentials: Subdomain',
            'description' => 'A subdivision of the primary domain, used to organize and navigate to different sections of a website.
            Continuous upkeep and management of subdomains to ensure they are secure, functional, and aligned with the main domain.
            <br><br>Monthly Renewal $30.00',
            'service_feature' => 'Customizable URL structures<br>
                                Content categorization<br>
                                SEO benefits<br>
                                Ability to host specific content types<br>
                                Security updates<br>
                                Performance monitoring<br>
                                SEO optimization<br>
                                Alignment with main websites<br> 
                                Design and policy<br>
                                  ',
            'price' => 150,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Design: Logo Basic',
            'description' => 'Basic logo design FinanceServices.
            Regular updates and maintenance of website design elements.
            <br><br>Monthly Renewal $105.00',
            'service_feature' => 'Simple design<br>
                                Limited revisions<br>
                                Basic file formats<br>
                                Design tweaks for better user experience<br>
                                Compatibility checks<br>
                                Visual enhancements<br>
                                  ',
            'price' => 200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Design: Logo Complex',
            'description' => 'Advanced logo design with intricate details.
            Regular updates and maintenance of website design elements.
            <br><br>Monthly Renewal $105.00',
            'service_feature' => 'Detailed design<br>
                            Multiple revisions<br>
                            Various file formats<br>
                            Branding guidelines<br>
                            Design tweaks for better user experience<br>
                            Compatibility checks<br>
                            Visual enhancements<br>
                                  ',
            'price' => 300,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Design: Web Layout',
            'description' => 'Designing the layout of a website.
            Regular updates and maintenance of website design elements.
            <br><br>Monthly Renewal $105.00',
            'service_feature' => 'Custom design<br>
                                Responsive layouts<br>
                                User-friendly interfaces<br>
                                Compatibility with various browsers<br>
                                Design tweaks for better user experience<br>
                                Compatibility checks<br>
                                Visual enhancements<br>
                                  ',
            'price' => 525,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Design: Web Frame',
            'description' => 'Framework design for website structure.
            Ongoing support for web framework.
            <br><br>Monthly Renewal $60.00',
            'service_feature' => 'Robust architecture<br>
                                Scalable design<br>
                                Integration with essential web technologies<br>
                                Framework upgrades<br>
                                Security enhancements<br>
                                Performance optimization<br>
                                  ',
            'price' => 300,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Design: ERD',
            'description' => 'A graphical representation of the data structure and relationships within a database.
            Regular updates and maintenance of the ERD to ensure it reflects the current database structure accurately.
            <br><br>Monthly Renewal $60.00',
            'service_feature' => 'Visual representation of entities<br>
                                Relationship mapping<br>
                                Attribute specification<br>
                                Support for normalization<br>
                                Periodic reviews<br>
                                Updating entity relationships<br>
                                Ensuring documentation accuracy<br>
                                Reflecting database changes<br>
                                  ',
            'price' => 300,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'APP Integration: Simple OT',
            'description' => 'One-time simple application integration FinanceServices.
            Regular maintenance for simple app integrations.
            <br><br>Monthly Renewal $200.00',
            'service_feature' => 'Basic integration with existing systems<br>
                                Limited customization<br>
                                Essential functionality setup<br>
                                Minor updates<br>
                                Compatibility checks<br>
                                Basic troubleshooting<br>
                                  ',
            'price' => 1000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'APP Integration: Simple Sub',
            'description' => 'Subscription-based simple application integration.
            Ongoing maintenance for subscription-based simple app integration.
            <br><br>Monthly Renewal $200.00',
            'service_feature' => 'Continuous integration support<br>
                                Regular updates<br>
                                Access to newer features<br>
                                Regular updates<br>
                                Feature enhancements<br>
                                Dedicated support<br>
                                  ',
            'price' => 2000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'APP Integration: Complex OT',
            'description' => 'One-time complex application integration.
            Maintenance for complex app integrations.
            <br><br>Monthly Renewal $300.00',
            'service_feature' => 'Advanced integration features<br>
                                Custom solutions<br>
                                Comprehensive system compatibility<br>
                                Regular updates<br>
                                Advanced troubleshooting<br>
                                and system optimization<br>
                                  ',
            'price' => 3000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'APP Integration: Complex Sub',
            'description' => 'Subscription service for complex application integration.
            Continuous support and updates for complex subscription-based app integrations.
            <br><br>Monthly Renewal $300.00',
            'service_feature' => 'Ongoing advanced support<br>
                                Access to the latest features<br>
                                Scalability options<br>
                                Frequent enhancements<br>
                                Dedicated technical support<br>
                                Compatibility maintenance<br>
                                  ',
            'price' => 8000,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Start Plan: Data Flow',
            'description' => 'Design and implementation of data flow systems.
            Ongoing support for data flow systems.
            <br><br>Monthly Renewal $105.00',
            'service_feature' => 'Efficient data handling<br>
                                Secure data transfer protocols<br>
                                Integration with databases<br>
                                Regular updates<br>
                                Performance monitoring<br>
                                Security checks<br>
                                  ',
            'price' => 525,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Start Plan: System Flow',
            'description' => 'Structuring and managing system flow processes.
            Continuous maintenance of system flow structures.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Streamlined process mapping<br>
                                Automation of workflows<br>
                                System efficiency enhancements<br>
                                Periodic reviews<br>
                                Process optimizations<br>
                                Updates for enhanced efficiency<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Start Plan: Web Stories',
            'description' => 'Creation and management of interactive web stories.
            Regular updates and support for web stories.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Engaging visual content<br>
                                Interactive elements<br>
                                Compatibility with various platforms<br>
                                Content updates<br>
                                Platform compatibility checks<br>
                                Performance analytics<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Start Plan: Project Plan',
            'description' => 'Development of comprehensive project plans.
            Ongoing support for project planning.
            <br><br>Monthly Renewal $165.00',
            'service_feature' => 'Detailed milestone mapping<br>
                                Resource allocation<br>
                                Timeline management<br>
                                Plan adjustments<br>
                                Resource management updates<br>
                                Timeline reviews<br>
                                  ',
            'price' => 825,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Start Plan: Documentation',
            'description' => 'Creation and management of project documentation.
            Continuous updates and management of project documentation.
            <br><br>Monthly Renewal $165.00',
            'service_feature' => 'Detailed documentation<br>
                                Version control<br>
                                Easy accessibility<br>
                                Regular revisions<br>
                                Document archiving<br>
                                Access control<br>
                                  ',
            'price' => 825,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Add to Cart',
            'description' => 'Feature for adding products to a shopping cart.
            <br><br>Monthly Renewal $60.00',
            'service_feature' => 'Seamless integration<br>
                                User-friendly interface<br>
                                Compatibility with multiple payment options<br>
                                  ',
            'price' => 300,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Online Payment',
            'description' => 'Enables secure and versatile payment options for online purchases.
            Ongoing updates and security enhancements for online payment systems.
            <br><br>Monthly Renewal $90.00',
            'service_feature' => 'Multiple payment methods (credit/debit cards, digital wallets), encrypted transactions, instant payment confirmation.
            Regular security updates, addition of new payment methods, performance optimization, compliance with financial regulations<br>
                                  ',
            'price' => 450,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Search Category',
            'description' => 'Facilitates product discovery by allowing customers to search within specific categories.
            Continuous improvement and updating of the search category functionality.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Filter options, sorting by relevance/price/rating, autocomplete suggestions, history of recent searches.
            Updating category lists, enhancing search algorithms, improving user interface, ensuring mobile responsiveness<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Product/Service Category',
            'description' => 'Organizes products or FinanceServices into navigable categories.
            Regular updating and management of product/service categories.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'Hierarchical structure, user-friendly interface, category-specific promotions, dynamic updating.
            Updating and adding new categories, optimizing category layout, enhancing user experience, performance monitoring.<br>
                                  ',
            'price' => 120,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Wishlist',
            'description' => 'Lets users save items for future reference or purchase.
            Continual enhancement and updating of the wishlist feature.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Easy add/remove options, shareable wishlists, notifications on price changes or availability.
            Regular feature updates, performance improvements, user experience enhancements, maintaining compatibility with new products/FinanceServices<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Order Tracking',
            'description' => 'Enables customers to monitor the progress of their orders from placement to delivery.
            Regular updating and upkeep of the e-commerce platform to ensure smooth operation.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Real-time tracking, integration with shipping FinanceServices, status updates, estimated delivery times.
            Software updates, security patches, performance monitoring, backup and recovery systems<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Order History',
            'description' => 'Records and displays all past orders made by a customer.
            Continual renewal and maintenance of backend systems to support e-commerce functionalities.
            <br><br>Monthly Renewal $150.00',
            'service_feature' => 'Detailed order information, repeat order function, downloadable order receipts, order status history.
            Database maintenance, server uptime management, regular feature updates, user experience improvements<br>
                                  ',
            'price' => 750,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Invoice',
            'description' => 'Generates detailed bills for customer purchases.
            Ongoing support and updates to keep the invoicing system efficient and compliant.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Automatic invoice creation, customizable templates, digital access to invoices, tax calculations.
            Compliance updates, security enhancements, feature upgrades, user interface improvements.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Revenue Stats',
            'description' => 'Provides insights into sales and revenue generated.
            Regular updating of analytics tools and data processing systems.
            <br><br>Monthly Renewal $180.00',
            'service_feature' => 'Sales tracking, revenue analysis, customizable reporting, trend identification.
            Data accuracy checks, system optimization, introduction of new analytics features, security updates<br>
                                  ',
            'price' =>900,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Add Product/Service',
            'description' => 'Interface for adding new products to the e-commerce platform.
            Ensuring the product management system is up-to-date and efficient.
            <br><br>Monthly Renewal $24.00',
            'service_feature' => 'Easy product upload, category assignment, price setting, product description and image uploads.
            System upgrades for better usability, feature enhancements, performance optimization.<br>
                                  ',
            'price' => 120,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Inventory',
            'description' => 'Manages stock levels and product availability.
            Ongoing updates and support for inventory management systems.
            <br><br>Monthly Renewal $90.00',
            'service_feature' => 'Stock tracking, low-stock alerts, automatic restock orders, supplier management integration.
            System upgrades, integration with new suppliers, performance enhancements, user interface improvements<br>
                                  ',
            'price' => 450,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Announcement',
            'description' => 'Communicates important information to customers.
            Regular updates to ensure effective communication tools.
            <br><br>Monthly Renewal $30.00',
            'service_feature' => 'Customizable announcement banners, scheduling, targeting specific customer groups, tracking engagement.
            New communication features, system reliability improvements, user interface enhancements.<br>
                                  ',
            'price' => 150,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Voucher/Coupon',
            'description' => 'Offers discounts and promotions to customers.
            Keeping the discount system efficient and updated.
            <br><br>Monthly Renewal $75.00',
            'service_feature' => 'Voucher generation, redemption tracking, expiration management, targeted offers.
            System updates for new promotional capabilities, performance improvements, security enhancements.<br>
                                  ',
            'price' => 375,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Chat',
            'description' => 'Provides real-time customer support through messaging.
            Continuous improvement of chat support systems.
            <br><br>Monthly Renewal $270.00',
            'service_feature' => 'Live chat support, automated responses, chat history, customer feedback collection.
            Feature updates, performance optimization, integration of new communication channels.<br>
                                  ',
            'price' => 1350,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Notifications',
            'description' => 'Sends alerts and updates to customers.
            Regularly updating the notification system for efficiency and relevance.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Personalized notifications, multi-channel delivery (email, SMS, app), user preference settings.
            System upgrades, new notification features, performance checks, user experience improvements.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'E-Commerce: Reviews',
            'description' => 'Allows customers to leave feedback on products.
            Ongoing support for the review system, ensuring its relevance and efficiency.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'User ratings, comment sections, review moderation, feedback analysis tools.
            Regular updates, system optimizations, introduction of new features, user interface improvements.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'CRM: Transfer Recommendation',
            'description' => 'Suggests optimal transfer opportunities for customer interaction.
            Ongoing support and updates for the CRM Transfer Recommendation tool.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'AI-driven recommendations, integration with customer history, seamless transfer options.
            Regular updates for improved accuracy, technical support, compatibility checks with other CRM features.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'CRM: API Dialer Integration',
            'description' => 'Integrates dialer systems with CRM for efficient call management.
            Continuous support and updates for the API Dialer Integration in CRM systems.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Automated call logging, click-to-call functionality, synchronization with customer profiles.
            Regular updates for API compatibility, technical support, and feature enhancements for smoother operation.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'CRM: Lead Miner/Webscrape',
            'description' => 'Extracts potential leads from various online sources.
            Regular updates to ensure accuracy and efficiency of the lead mining tool.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Automated scraping tools, filters for target demographics, integration with CRM for lead management.
            Updating scraping algorithms, compliance with data protection laws, performance optimization.<br>
                                  ',
            'price' => 360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'CRM: Agent QA Management',
            'description' => 'Manages and evaluates the performance and quality of customer service agents.
            Ongoing updates to enhance agent quality assessment and management tools.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Performance tracking, feedback mechanisms, quality assessment metrics, training modules integration.
            Regular feature updates, integration of new assessment techniques, system optimization.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'CRM: Agent Reporting',
            'description' => 'Generates reports on agent performance, customer interactions, and other CRM metrics.
            Regular maintenance to ensure accurate and efficient reporting.
            <br><br>Monthly Renewal $168.00',
            'service_feature' => 'Custom report generation, real-time data analysis, performance metrics, historical data comparison.
            Updating reporting algorithms, data accuracy checks, system enhancements.<br>
                                  ',
            'price' => 840,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Attendance',
            'description' => 'Tracks and manages employee attendance records.
            Continuous updates to improve attendance tracking systems.
            <br><br>Monthly Renewal $360.00',
            'service_feature' => 'Automated time tracking, integration with payroll, absence management, real-time reporting.
            System upgrades, compliance with labor laws, integration of new features, user experience enhancements.<br>
                                  ',
            'price' => 1800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Salary Calculator',
            'description' => 'Tool for calculating employee salaries based on various factors.
            Regular updates to ensure accurate and compliant salary calculations.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Customizable salary formulas, integration with attendance and performance data, tax calculations.
            Tax rate updates, incorporation of new compensation models, system optimization.<br>
                                  ',
            'price' => 360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Payslip',
            'description' => 'Generates detailed payslips for employees.
            Ongoing maintenance to ensure the payslip system is up-to-date and functional.
            <br><br>Monthly Renewal $48.00',
            'service_feature' => 'Automated
            Regular updates for legal compliance, system enhancements, format customization options.<br>
                                  ',
            'price' => 240,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Payroll Processing',
            'description' => 'Manages the entire payroll process for employees.
            Regular updates and maintenance of the payroll processing system.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Automated payroll calculations, tax deductions, benefit integration, direct deposit functionality.
            Compliance updates, performance optimization, integration of new payment methods, security enhancements.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Recruitment Hub',
            'description' => 'Centralized platform for managing all aspects of recruitment.
            Continuous improvement of the recruitment platform.
            <br><br>Monthly Renewal $480.00',
            'service_feature' => 'Applicant tracking, interview scheduling, candidate communication, reporting and analytics.
            Feature upgrades, user interface improvements, integration of new recruitment channels, system performance monitoring.<br>
                                  ',
            'price' => 2400,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Employment Files Management',
            'description' => 'System for organizing and managing employee documents and files.
            Regular updates to ensure efficient and secure management of employment files.
            <br><br>Monthly Renewal $480.00',
            'service_feature' => 'Digital file storage, secure access, categorization, integration with HRIS.
            Security upgrades, system enhancements, compliance with data protection laws, user experience improvements.<br>
                                  ',
            'price' => 2400,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'HRIS: Leave Monitoring Mgt',
            'description' => 'Tracks and manages employee leave and absences.
            Ongoing updates to enhance the leave monitoring system.
            <br><br>Monthly Renewal $2400.00',
            'service_feature' => 'Leave balance tracking, automated leave requests and approvals, integration with payroll, reporting capabilities.
            System upgrades, policy compliance updates, user interface enhancements, performance improvements.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Finance & Accounting: Salary Processing',
            'description' => 'Manages the calculation and distribution of employee salaries.
            Regular updates to ensure efficient and accurate salary processing.
            <br><br>Monthly Renewal $192.00',
            'service_feature' => 'Integration with HRIS, automated calculations, direct deposit, compliance with financial regulations.
            Updating tax tables, incorporating new payment regulations, system security enhancements, processing efficiency improvements.<br>
                                  ',
            'price' => 960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Finance & Accounting: Finances Monitoring',
            'description' => 'Tool for monitoring and managing the companys financial health and transactions.
            Continuous updates and maintenance of financial monitoring tools.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Real-time financial data tracking, budgeting tools, expense tracking, financial reporting and analytics.
            Implementing new financial regulations, system optimization, feature enhancements, security updates.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Supply Chain: Equipment Monitoring',
            'description' => 'Tracks and manages the usage and maintenance of equipment in the supply chain.
            Regular maintenance and updates to the equipment monitoring system.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Real-time equipment tracking, maintenance scheduling, performance analytics, alert systems for malfunctions.
            System upgrades for new equipment types, performance optimization, integration with other supply chain systems.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Supply Chain: Supplies Tracker',
            'description' => 'Manages and monitors supplier relationships and performance.
            Ongoing updates to improve supplier tracking and management.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Supplier performance tracking, order management, communication tools, risk assessment capabilities.
            Adding new suppliers, updating performance metrics, system enhancements, user interface improvements.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Supply Chain: Request Tracker',
            'description' => 'Manages and tracks internal and external supply chain requests.
            Continuous improvement of the request tracking system.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Request logging, status tracking, prioritization tools, integration with inventory management.
            System updates, performance optimization, integration with other supply chain components, user experience enhancements.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Employee Management: Evaluation Form',
            'description' => 'Tool for assessing employee performance and providing feedback.
            Regular updates to the employee evaluation system.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Customizable evaluation criteria, automated scoring, feedback collection, performance trend analysis.
            Updating evaluation criteria, system enhancements, integration with HRIS, user experience improvements.<br>
                                  ',
            'price' => 360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Employee Management: Coaching Form',
            'description' => 'A tool for managing employee performance and development.
            Ongoing support and updates for the system.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Customizable forms, performance tracking, feedback integration.
            Regular updates, technical support, system optimization.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Employee Management: Course/Learning System',
            'description' => 'E-learning platform for employee training.
            Continuous service for e-learning platform.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Course creation, progress tracking, certification management.
            Regular content updates, system maintenance, user support.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Employee Management: Certificate Form',
            'description' => 'Digital system for issuing and managing employee certifications.
            Ongoing support and updates for certificate management.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Automated certificate generation, expiration tracking, digital storage.
            Regular updates, compliance checks, support FinanceServices.<br>
                                  ',
            'price' => 360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Transcription',
            'description' => 'Automated transcription of audio and video files.
            Continuous improvement and support for AI transcription FinanceServices.
            <br><br>Monthly Renewal $192.00',
            'service_feature' => 'High accuracy, multiple language support, easy integration with other systems.
            Regular accuracy improvements, additional language support, technical support.<br>
                                  ',
            'price' => 960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Chatbot',
            'description' => 'AI-powered chatbot for customer interaction and support.
            Ongoing support and updates for AI chatbot.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Natural language processing, customizable responses, easy integration with websites.
            Regular updates, AI training with new data, support for additional platforms.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Query',
            'description' => 'Automated query handling and data retrieval system.
            Continuous support and enhancement for automated query systems.
            <br><br>Monthly Renewal $192.00',
            'service_feature' => 'Fast response times, high accuracy, customizable query parameters.
            Regular updates, optimization for speed and accuracy, technical support.<br>
                                  ',
            'price' => 960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Auto Likes',
            'description' => 'Automated system for social media engagement.
            Ongoing support for automated social media engagement systems.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Customizable targeting, activity scheduling, analytics tracking.
            Regular updates, compliance with social media platform changes, support FinanceServices.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Auto SEO',
            'description' => 'Automated tool for optimizing website content for search engines.
            Ongoing support and updates for Auto SEO tools.
            <br><br>Monthly Renewal $192.00',
            'service_feature' => 'Keyword analysis, content optimization, backlink strategies, analytics tracking.
            Regular algorithm updates, new feature additions, technical support.<br>
                                  ',
            'price' => 960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Auto Email',
            'description' => 'Automated email marketing and communication tool.
            Continuous support and updates for automated email systems.
            <br><br>Monthly Renewal $48.00',
            'service_feature' => 'Campaign automation, audience segmentation, performance analytics, customizable templates.
            Regular feature updates, compliance with email standards, technical support.<br>
                                  ',
            'price' => 240,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Auto Crawl',
            'description' => 'Automated web crawling and data extraction tool.
            Continuous support and enhancements for web crawling tools.
            <br><br>Monthly Renewal $120.00',
            'service_feature' => 'Scalable crawling, data extraction and processing, customizable crawl parameters.
            Regular updates, scalability improvements, technical support.<br>
                                  ',
            'price' => 600,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'AI Automation: Auto Text',
            'description' => 'AI-powered tool for generating automated text content.
            Ongoing support and updates for automated text generation tools.
            <br><br>Monthly Renewal $48.00',
            'service_feature' => 'Natural language generation, content customization, integration with various applications.
            Regular AI model improvements, new feature integrations, technical support.<br>
                                  ',
            'price' => 240,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Sales & Payment Processing',
            'description' => 'System for processing sales transactions and payments.
            Continuous support and updates for sales and payment systems.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Multi-channel payment processing, real-time transaction data, secure payment gateways.
            Regular updates, new payment method integrations, technical support.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Inventory Management',
            'description' => 'Tool for managing and tracking inventory in real-time.
            Ongoing support and updates for inventory management systems.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Automated stock updates, low-stock alerts, inventory forecasting.
            Regular feature enhancements, inventory optimization tools, technical support.<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Reporting Analytics',
            'description' => 'Analytics tools for generating sales and business reports.
            Continuous support and updates for POS reporting and analytics tools.
            <br><br>Monthly Renewal $240.00',
            'service_feature' => 'Customizable reporting, sales trend analysis, key performance indicators tracking.
            Regular updates for analytics features, data accuracy improvements, technical support. |<br>
                                  ',
            'price' => 1200,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: CRM',
            'description' => 'Customer Relationship Management integration with POS systems.
            Ongoing support and updates for CRM systems integrated with POS.
            <br><br>Monthly Renewal $360.00',
            'service_feature' => 'Customer data management, loyalty program tracking, personalized marketing and sales insights.
            Regular updates, feature enhancements, customer support for CRM functionalities.<br>
                                  ',
            'price' => 1800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Employee Mgt',
            'description' => 'Tools for managing and optimizing employee tasks and schedules.
            Continuous support and updates for employee management tools.
            <br><br>Monthly Renewal $500.00',
            'service_feature' => 'Staff scheduling, performance tracking, payroll integration, employee productivity analysis.
            Regular updates, new management features, technical support.<br>
                                  ',
            'price' => 2500,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Integrations',
            'description' => 'Seamless integration capabilities with various business systems. 
            Ongoing support for maintaining and updating POS integrations.
            <br><br>Monthly Renewal $360.00',
            'service_feature' => 'API support, compatibility with multiple software platforms, streamlined data integration.
            Regular updates, new integration capabilities, technical support.<br>
                                  ',
            'price' => 1800,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: User Friendly Interface',
            'description' => 'Easy-to-navigate interface design for POS systems.
            Continuous interface improvement and support for POS systems.
            <br><br>Monthly Renewal $192.00',
            'service_feature' => 'Intuitive layout, quick-access features, customizable interface options.
            Regular user experience enhancements, customization updates, technical support.<br>
                                  ',
            'price' => 960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Scalability',
            'description' => 'POS systems designed to adapt and grow with business expansion.
            Ongoing support for scaling POS systems according to business needs. 
            <br><br>Monthly Renewal $48.00',
            'service_feature' => 'Modular design, scalable features, support for increasing transaction volumes and user base.
            Regular scalability enhancements, support for growing businesses, technical assistance.<br>
                                  ',
            'price' => 240,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Security Protocols',
            'description' => 'Advanced security measures in POS systems for data protection.
            Continuous support and updates for POS security protocols.
            <br><br>Monthly Renewal $48.00',
            'service_feature' => 'Encryption, secure transaction processing, compliance with industry security standards.
            Regular security updates, vulnerability assessments, technical support.<br>
                                  ',
            'price' => 240,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Tech and Dev',
            'title' => 'Point of Sale: Support and Updates',
            'description' => 'A service offering dedicated support and regular updates for Point of Sale (POS) systems.
            Ongoing support and maintenance FinanceServices for the POS system, ensuring its optimal operation.
            <br><br>Monthly Renewal $72.00',
            'service_feature' => 'Customer support FinanceServices, system maintenance, feature enhancements, software updates, technical assistance.
            Regular system checks, updates to ensure compatibility and efficiency, access to technical support, and troubleshooting.<br>
                                  ',
            'price' => 360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });


         /* Digital Media and Marketing */

         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Avalon House Sneak Peek',
             'description' => 'Exclusive early access to Avalon Houses upcoming publications and content.',
             'service_feature' => 'Early access to select publications  Behind-the-scenes content Invitations to pre-release events Interaction with authors and creators<br>
                                   ',
             'price' => 260,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bookmarks per 200',
             'description' => 'Bookmarks per 200 is a comprehensive bookmarking solution designed for avid readers and researchers. This product offers a pack of 200 bookmarks, each featuring unique and user-friendly attributes. ',
             'service_feature' => 'Durability Variety in Design Writable Surface Non-Slip Texture Color-Coded System Eco-Friendly Slim Profile Portable Storage Case Portable Storage Case<br>
                                 ',
             'price' => 726.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Business Card per 200',
             'description' => 'Business Card per 200 offers a premium set of 200 professionally designed business cards, tailored to meet the needs of business professionals, entrepreneurs, and freelancers ',
             'service_feature' => 'High-Quality Material Customizable Design Advanced Printing Techniques Double-Sided Printing  Eco-Friendly Options Protective Coating Standard and Custom Sizes Quick and Efficient Delivery <br>
                                 ',
             'price' => 526.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Postcards per 200',
             'description' => 'Postcards per 200 provides a bulk set of 200 customizable postcards, ideal for various applications like personal greetings, business promotions, event invitations, or travel souvenirs. An excellent choice for anyone looking for a high-quality, versatile, and customizable mailing option. Whether for personal or professional use, these postcards provide a reliable and effective way to communicate messages and share memories.',
             'service_feature' => 'High-Quality Paper Stock Customizable Designs Full-Color Printing Double-Sided Use  Standard and Custom Sizes Versatile Use Bulk Packaging <br>
                                 ',
             'price' => 893.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Posters per 200',
             'description' => 'Posters per 200 is a bulk offering of 200 high-quality, customizable posters, designed to cater to businesses, educational institutions, event organizers, or individuals seeking a visually impactful medium. Ideal for those who need a large quantity of high-quality, visually appealing posters for business promotions, educational purposes, events, or personal use. This product offers a perfect blend of quality, customization, and practicality.',
             'service_feature' => 'Premium Paper Quality Customizable Designs High-Resolution Printing Various Sizes Vibrant Color Options Bulk Quantity Quick Turnaround and Shipping <br>
                                 ',
             'price' => 1393.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Card Calendar per 200',
             'description' => 'Card Calendar per 200 presents a unique and innovative approach to traditional calendars, offering a pack of 200 pocket-sized calendar cards. These cards are designed for individuals and businesses who appreciate both functionality and style. An excellent choice for those seeking a practical, stylish, and innovative way to stay organized and promote their brand or personal message throughout the year.',
             'service_feature' => 'Compact and Portable High-Quality Material Customizable Design Clear and Concise Layout Double-Sided Printing Versatile Use Bulk Quantity Attractive Packaging <br>
                                 ',
             'price' => 526.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Circle of Literary Agents 500',
             'description' => 'Circle of Literary Agents 500 is a comprehensive platform or network, connecting authors with a diverse pool of 500 literary agents. This service is crafted to cater to writers across various genres, seeking professional representation and guidance in the publishing world ',
             'service_feature' => 'Diverse Range of Agents Personalized Matching Professional Profiles Query Letter Assistance Direct Communication Channels Educational Resources Feedback and Review FinanceServices Networking Opportunities Flexible Membership Options Privacy and Security <br>
                                 ',
             'price' => 1126.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Circle of Literary Agents 1000',
             'description' => 'Circle of Literary Agents 1000 is a premium networking and matching platform that connects authors with a wide array of literary agents. Its tailored to cater to the diverse needs of writers in various genres, from fiction and non-fiction to poetry and academic writing.',
             'service_feature' => 'Extensive Network of Agents Advanced Matching Algorithm In-Depth Agent Profiles Personalized Dashboard Manuscript Showcase Opportunities Educational Resources and Workshops Professional Query and Synopsis Review Networking Events  Confidential and Secure Platform Flexible Membership Tiers<br>
                                 ',
             'price' => 2260,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Circle of Literary Agents 2000',
             'description' => 'An extensive network platform connecting writers with over 2000 literary agents globally, specializing in various genres and markets.',
             'service_feature' => 'Access to a database of 2000+ agents. Filters for genre, market, and agent experience. Direct messaging and query letter submission tools.<br>
                                 ',
             'price' => 4493.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bookstore Fundamentals 500',
             'description' => ' A beginners guide to managing a small-scale bookstore, covering the basics of inventory, marketing, and customer service for up to 500 titles.',
             'service_feature' => 'Inventory management techniques for small collections. Basic marketing strategies. Customer service best practices.<br>
                                 ',
             'price' => 1126.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bookstore Fundamentals 1000',
             'description' => 'An intermediate guide for bookstore management, focusing on effective strategies for handling a medium-sized inventory of up to 1000 titles.',
             'service_feature' => 'Advanced inventory organization. Intermediate marketing and promotional strategies. Customer engagement and loyalty programs.<br>
                                 ',
             'price' => 2260,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bookstore Fundamentals 3000',
             'description' => ' An advanced manual for managing large bookstores, with in-depth strategies for handling and promoting an extensive inventory of over 3000 titles.',
             'service_feature' => 'Comprehensive inventory management systems. Advanced marketing tactics and analytics. Extensive customer relationship management.<br>
                                 ',
             'price' => 6726.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'TradPub Pitch 100',
             'description' => 'A basic course on crafting and refining a traditional publishing pitch, suitable for novices, covering key elements for a 100-word pitch.',
             'service_feature' => 'Guidelines for concise and compelling pitches. Examples of successful 100-word pitches. Techniques for capturing interest quickly.<br>
                                 ',
             'price' => 5293.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'TradPub Pitch 200',
             'description' => 'A detailed guide on developing a 200-word traditional publishing pitch, ideal for writers looking to expand on the core elements of their story.',
             'service_feature' => 'Expansion techniques for a short pitch. Samples of effective 200-word pitches. Focus on storytelling within a limited word count.<br>
                                 ',
             'price' => 5826.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'TradPub Pitch 300',
             'description' => 'An intermediate workshop focused on crafting a 300-word pitch, balancing detailed storytelling with brevity, suitable for traditional publishing.',
             'service_feature' => 'Strategies for comprehensive yet concise pitches. Examples of well-crafted 300-word pitches. Insights on engaging publishers with a longer pitch.<br>
                                 ',
             'price' => 6393.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'TradPub Pitch 400',
             'description' => 'An extensive course on creating a 400-word traditional publishing pitch, perfect for in-depth storytelling while maintaining the interest of agents and publishers.',
             'service_feature' => 'Techniques for detailed storytelling in pitches. Case studies of successful 400-word pitches. Emphasis on narrative structure within the pitch.<br>
                                 ',
             'price' => 6960,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'TradPub Pitch 500',
             'description' => 'An advanced masterclass on formulating a 500-word pitch, offering comprehensive storytelling methods for traditional publishing submissions.',
             'service_feature' => 'In-depth storytelling and narrative techniques. Analysis of top-tier 500-word pitches. Personal branding and author’s voice development.<br>
                                 ',
             'price' => 8693.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Press Release with Media Distribution',
             'description' => 'Creation and distribution of a press release to major media outlets.',
             'service_feature' => ' Writing service, media contact database, distribution to national and local news networks, and media monitoring. <br>
                                 ',
             'price' => 4126.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Press Release with Distribution to Internet readers',
             'description' => 'Distribution of a press release to an online audience through web channels.',
             'service_feature' => 'Online press release distribution, SEO optimization, and targeting specific online communities or forums.<br>
                                 ',
             'price' => 1793.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Social Media 2 months Management AVALON HOUSE SERVICE',
             'description' => 'A two-month social media management service for platforms like Facebook, Twitter, Instagram, etc.',
             'service_feature' => 'Content creation, scheduling posts, community engagement, analytics reports, and strategy consultation.<br>
                                 ',
             'price' => 4126.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Social Media 5 months Management AVALON HOUSE SERVICE',
             'description' => 'A five-month comprehensive social media management service.',
             'service_feature' => 'Includes all features of the 2-month service with additional strategic planning and long-term analytics.<br>
                                 ',
             'price' => 6493.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Social Media 1 Year management AVALON HOUSE SERVICE',
             'description' => 'A year-long, in-depth social media management and strategy service.',
             'service_feature' => 'Extended features of the 5-month service, reputation management, influencer collaboration, and continuous optimization.<br>
                                 ',
             'price' => 8860,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Social Media Ads',
             'description' => 'Creation and management of advertising campaigns on social media platforms.',
             'service_feature' => 'Ad design, targeting specific demographics, budget management, A/B testing, and performance analytics.<br>
                                 ',
             'price' => 1793.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Social Media Early Publicity Graphics',
             'description' => 'Design of early-stage publicity materials for social media.',
             'service_feature' => 'Custom graphic design, branding alignment, social media optimized sizes, and multiple revisions.<br>
                                 ',
             'price' => 126.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Audiobook AVALON HOUSE SERVICE ',
             'description' => 'Audiobook production service for the first 20,000 words of a manuscript.
             <br><br>Additional service for audiobook production beyond the initial 20,000 words.
             <br><br>$0.27',
             'service_feature' => 'Professional narration, sound editing, quality assurance, and distribution assistance.<br>
             Continuation of professional narration and editing, proportional pricing, and seamless integration with initial segment.<br>
                                 ',
             'price' => 5426.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Lead Magnet',
             'description' => ' Creation of a lead magnet to attract potential customers or clients.',
             'service_feature' => 'Custom content creation (e.g., ebooks, webinars), design FinanceServices, and strategic placement for lead generation.<br>
                                 ',
             'price' => 7026.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Youtube Plus',
             'description' => 'Enhanced FinanceServices for YouTube content creation and channel management.',
             'service_feature' => 'Video editing, SEO optimization, thumbnail creation, content strategy, and audience engagement analytics.<br>
                                 ',
             'price' => 5626.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Podcast Set up and Management',
             'description' => 'Comprehensive service for starting and managing a podcast.<br><br>Ongoing monthly service for podcast management and optimization.
             <br><br> Monthly Renewal $5626.67',
             'service_feature' => 'Technical setup assistance, episode planning, audio editing, distribution on platforms, and initial marketing. Continuous audio editing, episode scheduling, audience analytics, and regular strategy reviews.<br>

                                 ',
             'price' => 4960,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Podcast Guesting - Addon',
             'description' => 'Service to facilitate guest appearances on podcasts.',
             'service_feature' => 'Identification of relevant podcasts, outreach, scheduling, and preparation assistance for appearances.<br>
                                 ',
             'price' => 926.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: Full Page',
             'description' => 'A full-page advertisement or review in the New York Times.',
             'service_feature' => 'Maximum visibility and space for content, high reader engagement, suitable for extensive reviews or ads with rich visual content.<br>
                                 ',
             'price' => 140000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 3/5 Page (Vert)',
             'description' => 'A vertically oriented advertisement or review occupying 3/5 of a page.',
             'service_feature' => 'Significant space for detailed content, allows for a mix of text and imagery, good visibility.<br>
                                 ',
             'price' => 95000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 1/2 Page (Horiz)',
             'description' => ' A horizontal half-page advertisement or review.',
             'service_feature' => 'Balanced space for content, suitable for concise reviews or ads, good visibility.<br>
                                 ',
             'price' => 90666.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 2/5 Page (Vert)',
             'description' => 'A vertically oriented advertisement or review occupying 2/5 of a page.',
             'service_feature' => 'Moderate space for content, ideal for focused messages with some visual elements.<br>
                                 ',
             'price' => 65668.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 3/10 Page (Vert)',
             'description' => 'A vertical advertisement or review taking up 3/10 of a page.',
             'service_feature' => 'Limited space, suitable for brief reviews or ads with a focus on text and some imagery.<br>
                                 ',
             'price' => 50333.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 1/5 Page (Vert)',
             'description' => 'A vertical 1/5 page advertisement or review.',
             'service_feature' => 'Compact space, ideal for concise, impactful messages.<br>
                                 ',
             'price' => 34668.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 1/5 Page (Short) *The ad is traller than wide',
             'description' => 'A shorter than wide 1/5 page advertisement or review.',
             'service_feature' => ' Unique format, suitable for eye-catching, brief content.<br>
                                 ',
             'price' => 34668.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 3/20 Page',
             'description' => 'A small advertisement or review taking up 3/20 of a page.',
             'service_feature' => 'Very limited space, ideal for very concise messages or small visuals.<br>
                                 ',
             'price' => 26000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 1/10 Page (Vert)',
             'description' => 'A vertically oriented 1/10 page advertisement or review.',
             'service_feature' => 'Minimal space, suitable for short, impactful text or a small image.<br>
                                 ',
             'price' => 17668.68,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Review: 1/20 Page',
             'description' => 'A tiny advertisement or review occupying 1/20 of a page.',
             'service_feature' => 'Extremely limited space, best for very short messages or logos.<br>
                                 ',
             'price' => 9333.33,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'New York Times Sunday Review',
             'description' => 'A special edition review published in the Sunday edition of the New York Times.',
             'service_feature' => 'High readership, suitable for reaching a broad audience with engaging content.<br>
                                 ',
             'price' => 6500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Los Angeles Times Review: Standard',
             'description' => 'A standard advertisement or review in the Los Angeles Times.',
             'service_feature' => 'General purpose, flexible format for a range of content types.<br>
                                 ',
             'price' => 4500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Los Angeles Times Review: Advance',
             'description' => 'An advanced placement or premium advertisement or review in the Los Angeles Times.',
             'service_feature' => 'Higher visibility and priority placement, suitable for high-impact messaging.<br>
                                 ',
             'price' => 5500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Los Angeles Times Review: Premium',
             'description' => 'A premium, high-visibility advertisement or review in the Los Angeles Times.',
             'service_feature' => 'Maximum exposure, ideal for major promotions or important announcements.<br>
                                 ',
             'price' => 6500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Publishers Weekly: Author Spotlight On',
             'description' => 'A feature focusing on a specific author in Publishers Weekly.',
             'service_feature' => 'Personalized focus, great for author promotion and detailed book discussions.<br>
                                 ',
             'price' => 11899,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Publishers Weekly: Standard',
             'description' => 'A standard advertisement or review in Publishers Weekly.',
             'service_feature' => 'Flexible and versatile, suitable for a variety of book-related promotions.<br>
                                 ',
             'price' => 1963,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Publishers Weekly: Advance',
             'description' => 'An advanced placement advertisement or review in Publishers Weekly.',
             'service_feature' => 'Higher visibility, ideal for upcoming releases or major announcements.<br>
                                 ',
             'price' => 3645,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Publishers Weekly: Premium',
             'description' => 'A premium advertisement or review in Publishers Weekly.',
             'service_feature' => 'Top-tier exposure, best for high-profile books or events.<br>
                                 ',
             'price' => 6893,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Ingram Catalog',
             'description' => 'An entry in the Ingram book catalog.',
             'service_feature' => 'Wide distribution, essential for bookstores and libraries, great for visibility in the book industry.<br>
                                 ',
             'price' => 3900,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'US Review of Books',
             'description' => 'A book review in the US Review of Books.',
             'service_feature' => 'National reach, focuses on thoughtful, in-depth book reviews.<br>
                                 ',
             'price' => 1790,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Pacific Book Review',
             'description' => 'A book review service focusing on authors and publishers in the Pacific region.',
             'service_feature' => 'Regional focus, personalized reviews, good for authors seeking exposure in the Pacific area.<br>
                                 ',
             'price' => 1500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Clarion Book Review',
             'description' => 'An independent book review service offering unbiased reviews.',
             'service_feature' => 'Credibility, unbiased critiques, useful for authors seeking honest feedback.<br>
                                 ',
             'price' => 1500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Blu-Ink Review',
             'description' => 'A publication or service focusing on book reviews and author promotions.',
             'service_feature' => 'Innovative approaches to book marketing, good for modern, tech-savvy audiences.<br>
                                 ',
             'price' => 1500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Kirkus Review',
             'description' => 'A well-respected book review publication.',
             'service_feature' => 'Prestigious and influential, great for credibility and wide exposure.<br>
                                 ',
             'price' => 2899,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Billboard Ads: Bulletin (Large Billboard)',
             'description' => '48 W x 14 H',
             'service_feature' => 'Range of 20,000 to 50,000 per location per day. $80,000 per location for a 4 week period of Ads<br>
                                 ',
             'price' => 85000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Billboard Ads: Poster (Medium Billboard)',
             'description' => '22.75 W x 10.5 H',
             'service_feature' => 'Range of 10,000 to 20,000 per location per day. $10,000 per location for a 4 week period of Ads<br>
                                 ',
             'price' => 15000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Billboard Ads: Junior Poster (Small Billboard)',
             'description' => '11 W x 5 H',
             'service_feature' => 'Range of 8,000 to 12,000 per location per day. $5,000 per location for a 4 week period of Ads<br>
                                 ',
             'price' => 10000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Billboard Ads: Bulletin,Digital/Video/LED (Large Digital Billboard)',
             'description' => '48 W x 14 H (1400px W x 400px H)',
             'service_feature' => 'Range of 35,000 to 65,000 per location per day. $100,000 per location for a 4 week period of Ads ~8 second spot in a loop of ~64 seconds<br>
                                 ',
             'price' => 105000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Billboard Ads: Wallscape',
             'description' => 'Varies (Depending on Location Wall)',
             'service_feature' => 'Range of 50,000 to 100,000 per location per day. $80,000 per location for a 4 week period of Ads<br>
                                 ',
             'price' => 85000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: King',
             'description' => '144 W x 30H',
             'service_feature' => 'Range of 9,000 to 17,000 per ad per day.$3,000 per display per 4 week period"<br>
                                 ',
             'price' => 8000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Ultra King',
             'description' => '248 W x 54 H (some
             markets may vary)',
             'service_feature' => 'Range of 15,000 to
             23,000 per ad per day.$5,000 per display per
             4 week period"<br>
                                 ',
             'price' => 10000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Ultra Super King',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 20,000 to 40,000 per ad per day.$9,000 per display per 4 week period<br>
                                 ',
             'price' => 14000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Full Wrap',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 50,000 to
             100,000 per ad per day.$20,000 per display per
             4 week period"<br>
                                 ',
             'price' => 25000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Tail',
             'description' => '72 W x 21 H',
             'service_feature' => 'Range of 7,000 to
             9,000 per ad per day.$2,000 per display per 4 week period"<br>
                                 ',
             'price' => 7000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Queen',
             'description' => '88 W x 30 H',
             'service_feature' => 'Range of 6,000 to
             8,000 per ad per day.$2,500 per display per 4 week period"<br>
                                 ',
             'price' => 7500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Full Back Tail',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 12,000 to
             20,000 per ad per day.$3,500 per display per
             4 week period"<br>
                                 ',
             'price' => 8500,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Double Decker Sightseeing Tour Bus (Hop On/Hop Off)',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 50,000 to 100,000 per ad per day.$90,000 per display per 4 week period<br>
                                 ',
             'price' => 95000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Bus Ads: Coach Bus',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 50,000 to
             100,000 per ad per day.$120,00 per display per
             4 week period"<br>
                                 ',
             'price' => 125000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Backlit Diorama (Gate/Terminal and Baggage Claim)',
             'description' => '62 W x 43 H',
             'service_feature' => 'Range of 12,000 to 15,000 per display per day$25,000 per display per 4 week period<br>
                                 ',
             'price' => 30000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Mini-Spectacular',
             'description' => '69 W x 69 H',
             'service_feature' => 'Range of 15,000 to 25,000 per display per
             day$38,000 per display per 4 week period"<br>
                                 ',
             'price' => 43000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Spectacular',
             'description' => '135 W x 83 H',
             'service_feature' => 'Range of 25,000 to 35,000 per display per
             day$46,000 per display per 4 week period<br>
                                 ',
             'price' => 51000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Digital/LED',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 20,000 to 35,000 per display per
             day$25,000 per display per 4 week period"<br>
                                 ',
             'price' => 30000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Airport Banner',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 40,000 to 60,000 per display per day$100,000 per display per 4 week period<br>
                                 ',
             'price' => 105000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Airport Ads: Private Jet',
             'description' => 'Varies by market',
             'service_feature' => 'Range of 3,000 to
             5,000 per display per day$35,000 per display per 4 week period"<br>
                                 ',
             'price' => 40000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 15 seconds (Still Images)',
             'description' => '1920px W x 1080px H (16x9)',
             'service_feature' => '$6,000 per theater per 4 week
             period"<br>
                                 ',
             'price' => 11000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 15 seconds (video)',
             'description' => '1920px W x 1080px H (16x9)',
             'service_feature' => '$8,000 per theater per 4 week
             period"<br>
                                 ',
             'price' => 13000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 30 seconds  (Still Images)',
             'description' => '1920px W x 1080px H (16x9)	',
             'service_feature' => '$10,000 per theater per 4
             week period"<br>
                                 ',
             'price' => 15000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 30 seconds (video)',
             'description' => '1920px W x 1080px H (16x9)	',
             'service_feature' => '$12,000 per theater per 4 week period<br>
                                 ',
             'price' => 17000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 60 seconds (Still Images)',
             'description' => '1920px W x 1080px H (16x9)	',
             'service_feature' => '$14,000 per theater per 4 week period<br>
                                 ',
             'price' => 19000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         FinanceServices::factory()
         ->count(1)
         ->state([
             'category' => 'Digital Media and Marketing',
             'title' => 'Movie Theatre and Cinema Ads: 60 seconds(video)',
             'description' => '1920px W x 1080px H (16x9)',
             'service_feature' => '$16,000 per theater per 4 week period<br>
                                 ',
             'price' => 21000,
             'picture' => 'service.png'
         ])
         ->create()
         ->each(function ($FinanceServices) {
             $user = User::inRandomOrder()->first();
             $FinanceServices->update([
                 'created_by' => $user->id
             ]);
         });
         

          /* Book Creation */

        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Creation: Starter Package',
            'description' => 'Ideal for first-time authors, offering basic tools for book creation.',
            'service_feature' => 'Simple editing tools  Basic design templates Up to 50 pages<br>
                                  ',
            'price' => 1993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Creation: Lite Package',
            'description' => 'A step up from the starter, with more design options and support.',
            'service_feature' => 'Enhanced editing tools Additional design templates Up to 100 pages Email support<br>
                                  ',
            'price' => 5993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Creation: Amateur Package',
            'description' => 'For budding authors, includes improved formatting and marketing tips.',
            'service_feature' => 'Advanced editing tools Diverse design templates Up to 200 pages Marketing guide Phone support<br>',
            'price' => 19993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Creation: Pro Package',
            'description' => 'Professional package with full suite of tools for serious writers.',
            'service_feature' => 'Professional editing suite Premium design options Unlimited pages SEO optimization for eBook 1-on-1 professional consultation<br>',
            'price' => 33326.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Creation: Advanced Package',
            'description' => 'Top-tier package for experienced authors, offering extensive customization.',
            'service_feature' => 'All Pro features Advanced customization options Multi-format support  Personalized marketing strategy  Access to exclusive webinars<br>',
            'price' => 49993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Cover Advanced',
            'description' => 'High-quality, customizable book cover design for a standout look.',
            'service_feature' => 'Custom design options 2 revision rounds High-resolution files<br>',
            'price' => 1326.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Cover Pro',
            'description' => 'Premium book cover design service with expert consultation.',
            'service_feature' => 'All Advanced features  Expert design consultation 3D mockup Additional revision round<br>',
            'price' => 893.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Per Image Insertion',
            'description' => 'Add images to your book with ease.',
            'service_feature' => 'Image placement in book Basic image editing  Up to 10 images per book<br>',
            'price' => 26.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Unli Image Insertion',
            'description' => 'Unlimited image insertion for visually rich books.',
            'service_feature' => 'Unlimited image placement Advanced image editing Image sourcing assistance<br>',
            'price' => 660,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Formatting and Layout',
            'description' => 'Service to professionally format and layout your book for publication.',
            'service_feature' => 'Customized formatting Multiple layout designs Digital and print format compatibility<br>',
            'price' => 226.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Authors Brand Logo',
            'description' => 'Creation of a unique logo to represent the authors brand.',
            'service_feature' => 'Custom logo design Multiple revisions High-resolution files<br>',
            'price' => 226.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Paperback Availability',
            'description' => 'Option to publish your book in paperback format.',
            'service_feature' => 'High-quality printing Various paper and size options Distribution assistance<br>',
            'price' => 493.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Hard Cover Availability',
            'description' => 'Option to publish your book with a durable hard cover.',
            'service_feature' => 'Premium cover material Dust jacket design Enhanced printing quality<br>',
            'price' => 826.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Handwritten Data Entry per page',
            'description' => 'Transcribing handwritten manuscripts into digital format.',
            'service_feature' => 'Accurate transcription  Formatting to match original script  Digital file delivery<br>',
            'price' => 13.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Upgrade Data Entry per page (If included in the package)',
            'description' => 'Upgrading the quality of data entry for manuscripts already part of a package.',
            'service_feature' => 'Enhanced accuracy  Additional formatting options Priority processing<br>',
            'price' => 5,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Typewritten Data Entry per page',
            'description' => 'Conversion of typewritten documents into a digital format.',
            'service_feature' => 'High-accuracy transcription Consistent formatting Digital or editable file formats<br>',
            'price' => 8.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Strategic Placement (Keywords, ATA, ATB)',
            'description' => 'Optimization of your book for discoverability using strategic keyword placement.',
            'service_feature' => 'Keyword research and implementation  ATA (Above the Title) optimization  ATB (Below the Title) optimization<br>',
            'price' => 626.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Correction per set/per round (all corrections should be sent all at once)',
            'description' => 'A service for making corrections in manuscripts, with each round consisting of a set of corrections.',
            'service_feature' => 'Comprehensive error checking One round of corrections per set Fast turnaround time<br>',
            'price' => 1160,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'U.S. Copyright',
            'description' => 'Securing U.S. copyright protection for your book.',
            'service_feature' => 'Copyright filing assistance Legal advice for protection Certificate of registration<br>',
            'price' => 1660,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Library of Congress',
            'description' => 'Registration of your book with the Library of Congress.',
            'service_feature' => 'Cataloging in Publication (CIP) data Library of Congress Control Number (LCCN) assignment<br>',
            'price' => 493.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Books in Print',
            'description' => 'Listing your book in the Books in Print database for wider visibility.',
            'service_feature' => 'ISBN assignment Inclusion in global database Increased discoverability<br>',
            'price' => 493.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Strategic Pricing',
            'description' => 'Assistance in setting the right price for your book in various markets.',
            'service_feature' => 'Market analysis Pricing strategy consultation Competitive pricing setup<br>',
            'price' => 293.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => '100 Percent Royalty - 3 years',
            'description' => 'Offering 100% royalty on book sales for a period of three years.',
            'service_feature' => 'No royalty sharing Transparent sales reporting Dedicated account manager<br>',
            'price' => 5660,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Returnability Program 12',
            'description' => 'A unique package or service, possibly related to book retail or promotion.',
            'service_feature' => 'Specialized service feature (to be defined) Tailored to specific author needs Exclusive benefits<br>',
            'price' => 1160,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Returnability Program 24',
            'description' => 'A 24-month book retail package offering extensive marketing and distribution.',
            'service_feature' => '24-month distribution Marketing campaigns Online and physical bookstore placement<br>',
            'price' => 2160,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Book Returnability Program 36',
            'description' => 'A 36-month premium book retail package with enhanced marketing FinanceServices.',
            'service_feature' => '36-month extended distribution Premium marketing FinanceServices International bookstore placement<br>',
            'price' => 3160,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Author Milestone All Access',
            'description' => 'Exclusive access to resources and events for authors reaching certain milestones.',
            'service_feature' => 'Invitations to exclusive events Access to premium resources Networking opportunities<br>',
            'price' => 2960,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Exclusive Author Relations Officer',
            'description' => 'Personalized support and guidance for authors throughout the publishing process.',
            'service_feature' => 'Dedicated support Customized advice Regular progress updates<br>',
            'price' => 2993.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Proofreading first 85k words',
            'description' => 'Comprehensive proofreading service for manuscripts up to 85,000 words.	
            
            <br><br>Proofreading service for words exceeding the initial 85,000-word limit.
            <br><br>Excesss per word $0.23
            ',
            'service_feature' => 'Detailed proofreading for additional words Charged per word.<br>
                                  Grammar and spelling check Punctuation correction Consistency review<br>
            ',
            'price' => 2660,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Copy Editing first 85k words',
            'description' => 'Proofreading service for words exceeding the initial 85,000-word limit.	
            
            <br><br>In-depth copy editing for manuscripts up to 85,000 words.
            <br><br>Excesss per word $0.27
            ',
            'service_feature' => 'Detailed proofreading for additional words Charged per word<br>
            Sentence structure refinement Clarity and tone adjustments Style consistency<br>
            ',
            'price' => 6680,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Substantive Editing first 85k words',
            'description' => 'Extensive substantive editing for manuscripts up to 85,000 words.	
            
            <br><br>Substantive editing service for words exceeding the initial 85,000-word limit.
            <br><br>Excesss per word $0.30
            ',
            'service_feature' => 'Content organization Logical flow enhancement Fact-checking<br>
            In-depth editing for additional words Charged per word<br>
            ',
            'price' => 13326.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Developmental or Conceptual Editing first 85k words',
            'description' => 'Developmental editing focusing on the structure and concept for manuscripts up to 85,000 words.
            	
            
            <br><br>Developmental editing service for words exceeding the initial 85,000-word limit.
            <br><br>Excesss per word $0.33
            ',
            'service_feature' => 'Concept development  Structural changes Theme and narrative enhancement<br>
            Detailed conceptual editing for additional words Charged per word<br>
            ',
            'price' => 19998.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level One - per page (Clean Brush)',
            'description' => 'Basic design service for page layout and formatting.',
            'service_feature' => 'Basic layout design Clean and simple style Charged per page<br>',
            'price' => 526.67,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        });
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Two - (Artisan Touch)',
            'description' => 'Intermediate design service with enhanced artistic input.',
            'service_feature' => 'Enhanced design elements  Artistic touch Charged per page<br>',
            'price' => 693.33,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Two x 10 Bundle (Artisan Touch)',
            'description' => 'Bundle package for Level Two design FinanceServices, covering 10 pages.',
            'service_feature' => '10-page bundle at a discounted rate  Consistent design across pages<br>',
            'price' => 6026.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Two x 15 Bundle (Artisan Touch)',
            'description' => 'Larger bundle package for Level Two design FinanceServices, covering 15 pages.',
            'service_feature' => '15-page bundle at a discounted rate Uniform artistic style<br>',
            'price' => 8360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Three - (3D Finish)',
            'description' => 'Advanced design service with premium artistic elements and 3D effects.',
            'service_feature' => '3D design elements Premium artistic style Charged per page<br>',
            'price' => 1026.68,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Three x 10 Bundle (3D Finish)',
            'description' => 'Bundle package for Level Three design FinanceServices, covering 10 pages.',
            'service_feature' => '10-page bundle with premium design at a discounted rate<br>',
            'price' => 9360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        FinanceServices::factory()
        ->count(1)
        ->state([
            'category' => 'Book Creation',
            'title' => 'Level Three x 15 Bundle (3D Finish)',
            'description' => 'Larger bundle package for Level Three design FinanceServices, covering 15 pages.',
            'service_feature' => '15-page bundle with advanced design features at a discounted rate<br>',
            'price' => 13360,
            'picture' => 'service.png'
        ])
        ->create()
        ->each(function ($FinanceServices) {
            $user = User::inRandomOrder()->first();
            $FinanceServices->update([
                'created_by' => $user->id
            ]);
        }); 
        
    
    }

    public function clearPictures() {
        $folderPath = base_path().'/public/fileupload/FinanceServices';

        $allowedExtensions = ['jpg', 'png', 'gif']; 

        if ($handle = opendir($folderPath)) {
            while (false !== ($file = readdir($handle))) {
                if (is_file($folderPath . '/' . $file) && in_array(pathinfo($file, PATHINFO_EXTENSION), $allowedExtensions)) {
                    unlink($folderPath . '/' . $file);
                }
            }
            closedir($handle);
        }
    }
}
