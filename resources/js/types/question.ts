import { Entity } from './entity';
import { Module } from './module';

export type Question = Entity & {
    module_id?: number;
    module?: Module;
    name?: string;
    desc?: string;
    code?: string;
    test?: string;
    questions?: GeneratedSoal[];
};

export type GeneratedSoal = {
    question_number: number;
    narasi: string;
    kode_utuh: string;
    kode_blank: string;
    test: string;
};
