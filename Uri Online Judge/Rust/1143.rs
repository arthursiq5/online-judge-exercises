use std::io::{stdin};

fn main() {
    let mut entrada = String::new();
    stdin().read_line(&mut entrada).expect("");
    let entrada :u32 = entrada.trim().parse().expect("");

    for n in 1..=entrada {
        println!("{} {} {}", n, n.pow(2), n.pow(3));
    }
}
