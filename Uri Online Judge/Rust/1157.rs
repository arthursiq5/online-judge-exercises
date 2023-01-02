use std::io::{stdin};

fn main() {
    let mut entrada = String::new();
    stdin().read_line(&mut entrada).expect("Error when reading line");
    let entrada :u32 = entrada.trim().parse().expect("Not integer");

    for i in 1..=entrada {
        if entrada % i == 0 {
            println!("{}",i);
        }
    }
}
