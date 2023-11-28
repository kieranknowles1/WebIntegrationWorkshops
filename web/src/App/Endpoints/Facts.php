<?php

namespace App\Endpoints;

class Facts extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }
    protected function realGetData(): mixed
    {
        $facts = [
            "Studies have shown that 90% of programming issues are fixed by yelling at the computer until the developer realizes they're the one who messed up.",
            "The number of gay pirate assassins is higher than you might think.",
            "80% of statistics are made up on the spot.",
            "The average person has one fallopian tube. I don't know what that is.",
            "50% of dogs are good boys.",
            "Averages are meaningless. For example, the average person has one testicle.",
            "If you drive off with less than £10 of petrol, most places won't bother chasing you. I have 200 jerry cans in my garage.",
            "If you need to get home after a night out, take the bus. That way it won't be your insurance that's invalid.",
            "It's Tuesday. If you're reading this and it isn't Tuesday, try again tomorrow.",
            "See that goat headbutting the fence. I don't know what he's thinking, but it isn't very much from the looks of it.",
            "If you want something and can't pay for it, just take it. <script>bank.transferMoneyTo('me', 'all')</script>",
            "If you're doing tax evasion, don't tell someone who works at HMRC or you'll have to give them a cut.",
            "If someone offers you a bribe, take it and then report them to the police.",
            "When a ship is sinking, it's the captain's job to test the lifeboats.",
            "I have no idea what my code does, I just copy from Stack Overflow and ChatGPT",
            "418 can be considered a substitute for 405",
            "You can get through any door with 2 cups of coffee, a lanyard, and some confidence.",
            "If you ask for nein bottles of beer in germany, you'll get nein bottles and won't pay a cent. Just be polite and ask to have it bitter.",
            "If you see a debate between two people, try to find a compromise that unites them against you. For example, arrays should start at 0.5.",
            "If you can't find a compromise, sit back and enjoy the show.",
            "People with guilty consciences are more easily startled by incomplete",
            "Programming is the art of taking the wrong approach and making it work anyway.",
            "Any library can do anything if you abuse it enough.",
            "English is a mess, I blame the French.",
            "If you don't have a plan you don't know what you're doing. Therefore, you can't be doing it wrong.",
            "The British have a tradition of invading other countries for food they don't like, then coming up with a god forsaken recipe such as deep fried mars bars.",
            "Global variables are fun, until you run into one of their many issues.",
            "100 randomly selected people were surveyed, the most common answer was 'Who are you and why are you in my house?'.",
            "Most people can run faster when they're being chased by an angry guy with a knife.",
            "The perfect halloween costume for a student is a werewolf. The tiredness and hairiness are already there.",
            "You can fix all errors by disabling the error checking.",
            "Given that the French assisted the Americans in the war of independence, blaming the Americans for something is the same as blaming the French.",
            "Git blame is a great way to find out who to blame for your problems. Hint: it's you.",
            "These facts are all true, any disagreements should be settled with a duel. Refusal to duel means you will never reach Valhalla.",
            "Docker seems fun until you have to use it. Then it's a prison sentence that you have to get node running to be let free.",
            "Boris Johnson is a suspiciously similar name to Bojo the clown.",
            "Any plan that involves the phrase 'trust me' is doomed to fail.",
            "Chefs and engineers are both frequently full of themselves. An engineer who works as a chef to pay the bills as a student is the worst of both worlds.",
            "This was supposed to be short, but I got carried away.",
            "People with an exhaust that pops and bangs are bragging about how their car is badly tuned and compensating for being a few inches shorter than average.",
            "The sequel trilogy makes much more sense if you assume that the main characters are all high on death sticks. Except for Finn who is doing all the actual work.",
            "The best way to get a job is to be the only applicant through any means necessary.",
            "I Expect You To Die combines Bond, MacGyver, escape rooms, except that Bond is a complete idiot and survives by sheer luck and the intro music is far too catchy.",
            "The British have long forgotten why they hate the French, at some point we just started going along with it.",
            "Negotiating is easy, I want £20 million, you want the hostages back, a win-win for both of us.",
            "Some species of animals have a name for when you don't know what their owners call them. For examples, all lizards are called Dave",
            "The number of bad ideas that seemed good at the time is directly proportional to the amount of alcohol consumed.",
            <<<LONG_ONE
            The more times you replay Skyrim, the weirder the bugs get. , we forgot what the players name was, let's just use the first string we find.
            Why is there stuff from a completely different cell in this one? How is the game running while over the plugin limit? Why is it valid to load a plugin before its dependencies?
            I've only just started a new game, why does Resaver say the save is broken beyond repair? Why is this quest running when the non-optional alias is empty?
            Why do I have a second mouth in the middle of the map that makes me invisible randomly? Why is my face replaced with the last Khajiit that loaded?
            Why do I hear fighting upstairs and why is this guy giving the noise the 'the f is going on up there' look?

            All of these and more have happened to me.
            LONG_ONE,
            "Removing the complaints form is the most effective way to reduce complaints.",
            "Most of Britain's extremely specific laws probably came about when a nobleman did something stupid and had to justify it somehow. Sure I killed him, but what did he expect when he was a speaking geordie with a scouse accent on a Tuesday morning in the bounds of Hull?",
            "American units make no sense, since blaming the Americans is the same as blaming the French, I blame the French. Even though they made the metric system.",
            "Most of the experiments in the SCP foundation are just the researchers messing with the D class.",
            "Sports invented by the British are played all around the world and the British are terrible at them. Sports invented by the Americans are only played in America and the Americans are #1 at them. Except for American Football which is just rugby.",
            "1 standard Freedom Land™ can is 355ml. That makes no sense whatsoever.",
            "You have successfully subscribed to Random Facts By Text. You have selected 'HOURLY' as your frequency. Note that this is not a free service and you will be charged £1 per text. To unsubscribe, send a hand written letter using a quill and ink containing your phone number, the sentence 'UnSub me m8' written using an ink and quill to Svalbard.",
            "PHP is a recursive acronym for Programmers Hate PHP.",
            "The best way of fixing issues in PHP is to rewrite everything in TypeScript.",
            "The main regional export of the north east is Greggs. Half of the country's Greggs are on Haymarket",
            "You can get unlimited free pizza and coffee by signing up for the Greggs app with a fake email address. I suppose you could also get tea, but coffee is better. Cafe comes from the Italian for coffee, not tea.",
            "React is JavaScript that just happens to produce HTML. PHP is a HTML-like string with PHP and JavaScript forcibly and violently shoved into it creating an ungodly abomination. React fails to compile if you forget a closing tag, PHP creates a security vulnerability for you instead.",
            "The strftime function takes in a string, guesses what format it is, thinks Unix time is YY/MM/DD, DD/MM/YY, or MM/DD/YY depending on how it's feeling, and returns a string in a format that you control for once, or false if it's in a bad mood.",
            "Historically, there has been at least one lesbian space pirate working for NASA.",
            "The more kidneys you donate, the more people start asking questions.",
            "Sorry Mr. Null, our database is held together by hopes and dreams, have you tried adding a space?",
            "Not for Broadcast takes place in the unspecified country of the UK, the most fictional part of it is that there is a functioning government. Instead of Thatcher, we have Julia 'Socialism is great' Salisbury and Peter 'Fu**ing' Clements. You play as the janitor who starts doing the news after the old guy quits and everyone else goes along with it since your contract only stated minimum wage and didn't specify a job.",
            "In Skyrim, the Stormcloaks say 'Skyrim belongs to the Nords', the Imperials say 'Skyrim belongs to the Empire', and J'zargo says 'Skyrim belongs to J'zargo' which is the only correct answer. High Hrothgar is a very dangerous place to accidentally fall off during a peace conference and someone has to rule Skyrim afterwards, why not J'zargo? I suppose Xelzaz says it belongs to the gourds, but that was in the April Fools patch so it doesn't count. Besides, he's Telvanni so he's definitely in the 'just take what you want' camp but Skyrim specifically belongs to J'zargo.",
            "If all the other applicants disappear under mysterious circumstances, you're the best applicant.",
            "When in doubt, blame the French.",
            "Saying any JavaScript is valid TypeScript severely overestimates the quality of much of the JavaScript out there.",
            "If you see a cat, you must point at it or say 'cat'. If you don't, you have to pet it, even if it's a lion.",
            "Werewolves are objectively better than vampires. In the day, they can be outside while vampires burn. At night, they are stronger than vampires.",
            "'No, I'm not a student' he said as he filled his mug to the brim with just espresso, 'I'm just pulling my 3rd all nighter in a row'.",
            "A cat who purrs whenever it sees you deserves to sleep wherever it wants.",
            "The UK is run by whoever lives in 10 Downing Street, therefore, Larry is the only legitimate prime minister. At the very least, he would be better than Liz Untrussworthy, destroyer of the pound or Rishi (Truss 2022) 'I'm not racist, I'm just against human rights' Sunak (Sunak 2023)",
            "Batman definitely has shares in the hospitals, that's the only way he can afford his lifestyle and why he never kills the Joker.",
            "I can't take the German language seriously when words like 'flammenwerfer' exist. They just looked at a flamethrower and said 'zis is a werfer of flammen, let's call it ze flammenwerfer. Why are you laughing? Is it ze accent? Germans don't speak like zis, zis is a stereotype. I vil not stand for zis. I am leaving. Auf wiedersehen.'",
            "TypeScript error messages are descriptive, but they'd be more useful if they got to the point.",
            <<<SQL
                -- SQL is either extremely simple or an ungodly mess that still runs quickly, yet adding a view wrecks performance even though it should be the same.
                -- Thanks to the developers of the query planner for selling their souls to the devil to make it work.
                -- I'm not sure if I endorse sacrificing the hearts of the error message developers to the SQL gods, but you can't win every battle.
                -- Case in point: This query that I wrote in 15 minutes and I think does so in O(n) time, but I don't understand what EXPLAIN QUERY PLAN is telling me.
                -- Even if I remove all the indexes, the autoindexes still cover everything.
                -- TLDR: Holy hell, SQLite is optimised to hell and back.
                SELECT
                    -- Number of ingredients that are available or unlimited
                    count(*) as available_count,
                    -- Total number of ingredients
                    (SELECT count(*) FROM recipe_ingredient WHERE recipe_id = outer_recipe_ingredient.recipe_id) AS total_count
                -- outer_recipe_ingredient is used in the subquery below
                FROM recipe_ingredient AS outer_recipe_ingredient
                -- Need access to ingredient.assumeUnlimited for WHERE clause
                JOIN ingredient ON ingredient.id = outer_recipe_ingredient.ingredient_id
                -- Filter to available or unlimited ingredients
                WHERE ingredient_id IN (SELECT ingredient_id FROM fridge_ingredient WHERE fridge_id = ?) OR ingredient.assumeUnlimited = true
                -- Group for available_count
                GROUP BY recipe_id
                -- All ingredients were available
                HAVING available_count = total_count
            SQL,
            "In Stellaris, the most important decision is whether to be militarist space racists, or space racists who are also militarists.",
            "Most construction projects are just there to keep the engineers busy. There is little more dangerous than a bored engineer.",
            "Newcastle is the best city in England, it's far from France, has plenty of Greggs, and is a safe distance from people who deep fry mars bars.",
            "LGBTQ+ keeps getting longer. I propose we simplify it to match(/\\w+/).",
            "'; DROP TABLE facts; -- Don't scrape my website.",
            "Cat names are either Barry, or Lord Fluffington the 3rd, devourer of souls.",
        ];
        $sources = [
            null,
            "null",
            "I made it up",
            "Just Google it",
            "I'm not sure, but I think it's true",
            "Other, please specify",
            "I saw it in a book once, I can't remember if the book was fiction or not",
            "What's a source?",
            "Why would you want to put a sauce on json?",
            "No idea mate",
            "TODO: Find something that looks plausible and put it here",
            "Trust me",
        ];
        return [
            "fact" => $facts[array_rand($facts)],
            "source" => $sources[array_rand($sources)],
        ];
    }
}
