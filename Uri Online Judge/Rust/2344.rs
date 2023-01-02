use std::io::{stdin};

fn main() {
    let mut entrada = String::new();
    stdin().read_line(&mut entrada).expect("Input error");

    let entrada :u8 = entrada.trim().parse().expect("Parse error");
    let mut nota = 'E';

    if entrada >= 1 { nota = 'D'; }
    if entrada > 35 { nota = 'C'; }
    if entrada > 60 { nota = 'B'; }
    if entrada > 85 { nota = 'A'; }

    println!("{}", nota);
}
