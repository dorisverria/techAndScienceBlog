<?php

use Illuminate\Database\Seeder;

class QuackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quack = new \App\Quack();
        $quack->title = "Apple Watch Series 3 watches start at $199, while Nintendo’s Switch bundle sale continues";
        $quack->text = "The Apple Watch Series 3 is back down to $199 for the 38mm model with GPS connectivity. This matches the lowest price that we’ve seen for Apple’s third-gen smartwatch, but if you’re looking for more savings (and are itching to leave your phone at home while you go out for a jog), the GPS-equipped and LTE-ready version starts at $259 at B&H Photo, while Best Buy and Amazon have it starting at $299 in case B&H sells out.";
        $quack->user_id = 3;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Box Enterprise accounts are not as secure as they should be";
        $quack->text = "More than 90 companies inadvertently exposed hundreds of thousands of documents and terabytes of data via Box, a cloud-based file-sharing system. Cybersecurity firm Adversis exposed the major security gaff and says everything from passport photos to social security and bank account numbers, prototype and design files, employee lists, and financial and IT data were revealed.";
        $quack->user_id = 2;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Adobe Is Finally Killing Shockwave Player for Good";
        $quack->text = "A specific era of the world wide web will come to an end next month when Adobe officially discontinues its Shockwave multimedia platform. You might want to get in a final round in your favorite browser-based game—but, more than anything, you should use this moment to delete Shockwave from your computer once and for all.";
        $quack->user_id = 4;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Using quantum measurements to fuel a cooling engine";
        $quack->text = "TResearchers at the University of Florence and Istituto dei Sistemi Complessi, in Italy, have recently proved that the invasiveness of quantum measurements might not always be detrimental. In a study published in Physical Review Letters, they showed that this invasive quality can actually be exploited, using quantum measurements to fuel a cooling engine.";
        $quack->user_id = 1;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "WHEN LIQUID METAL TURNS TO PLASMA, THE PHYSICS GET WEIRD";
        $quack->text = "Researchers have discovered a way to turn a liquid metal into a plasma and observe the temperature when a liquid under high-density conditions crosses over to a plasma state.";
        $quack->user_id = 3;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "New Charmonium Particle Discovered";
        $quack->text = "Physicists from the Large Hadron Collider beauty (LHCb) Collaboration at CERN have discovered a previously unknown particle that consists of a charm quark and its antimatter counterpart, the charm antiquark. The mass and other properties of the new particle, ψ3(1D), place it squarely in the charmonium family that includes the better-known J/ψ meson, which was the first particle containing a charm quark to be discovered.";
        $quack->user_id = 1;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Elon Musk's toy 'Earthy' has been taken hostage! ISS astronauts kidnapped the fluffy globe sent up on SpaceX's Dragon crew capsule";
        $quack->text = "SpaceX's unmanned capsule 'Crew Dragon' successfully returned to Earth on Friday, fully intact with one item missing: a soft toy.
        'Earthy' resembles our planet with the addition of arms and legs and was sent up in the capsule to measure the gravitational force at work inside.        
        It has since been kept hostage by astronauts on the International Space Station (ISS).       
        Three astronauts on board have been 'going crazy' for the toy since its arrival, posting pictures of it on their Twitter accounts. ";
        $quack->user_id = 1;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Apple and Facebook Are About to Compete Like Never Before";
        $quack->text = "I believe the future of communication will increasingly shift to private, encrypted services where people can be confident what they say to each other stays secure and their messages and content won't stick around forever, Facebook (NASDAQ:FB) CEO Mark Zuckerberg wrote in a lengthy blog post last week detailing where he sees the social networking giant's privacy-focused future. The missive comes after Facebook has grappled with countless privacy and data use scandals over the past few years, and at face value represents a massive shift in direction for the company.It also means that Facebook will be competing with Apple (NASDAQ:AAPL) like never before.";
        $quack->user_id = 3;
        $quack->save();

        $quack = new \App\Quack();
        $quack->title = "Hey, Google, ditch Siri with a quick shortcut to the Assistant on your iPhone";
        $quack->text = "Hey, Google, did you know I could bypass Siri with one click on an iPhone and go to you instead? Apple recently upgraded its Siri Shortcuts, which let you record quick one to two-word commands to Siri create a tweet, call the wife, read aloud your daily schedule or play your favorite podcast.";
        $quack->user_id = 2;
        $quack->save();

    }
}
