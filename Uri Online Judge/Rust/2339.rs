use std::io::{stdin};

fn main() {
    let mut entrada = String::new();
    stdin().read_line(&mut entrada).expect("Input error");
    let entrada :Vec<&str> = entrada.split(" ").collect();

    let competidores :f32 = entrada[0].trim().parse().expect("Error when converting to int");
    let papel_comprado :f32 = entrada[1].trim().parse().expect("Error when converting to int");
    let folhas_por_competidor :f32 = entrada[2].trim().parse().expect("Error when converting to int");

    if papel_comprado / competidores >= folhas_por_competidor {
        println!("S");
    } else {
        println!("N");
    }
}
