import { useEffect, useRef, useState } from "react";
import User from '@/Assets/icons/User';
import { Link } from '@inertiajs/react';
import Message from '@/Assets/icons/Message';
import Friends from '@/Assets/icons/Friends';
import Home from "@/Assets/icons/Home";
import Explore from "@/Assets/icons/Explore";
import Like from "@/Assets/icons/Like";
import Settings from "@/Assets/icons/Settings";
import Save from "@/Assets/icons/Save";
import Post from '@/Pages/Posts/index'
import Profile from '@/Assets/pics/profile01.jpeg'

export default function Dashboard({ children }) {
    // Changer navbar apartir transparent vers white
    const [changeHeader, setChangeHeader] = useState(false);
    const onChangeHeader = () => {
        if (window.scrollY >= 50) {
            setChangeHeader(true);
            setOpenUser(false);
        } else setChangeHeader(false);
    };
    window.addEventListener('scroll', onChangeHeader)

    // Open User
    const [openUser, setOpenUser] = useState(false);
    const toggleUser = () => {
        setOpenUser(!openUser);
    };
    // Toggle User
    const userRef = useRef(null);
    useEffect(() => {
        document.addEventListener('mousedown', handleClickOutside);
        return () => {
            document.removeEventListener('mousedown', handleClickOutside);
        };
    }, []);
    const handleClickOutside = (event) => {
        if (!userRef.current.contains(event.target) && !event.target.closest('.bg-white')) {
            setOpenUser(false);
        }
    };

    //sign Out
    const [openConfirmSignout , setConfirmSignout] = useState(false)
    const openConfirmationSignOut = () => {
        setConfirmSignout(true)
    }
    const closeConfirmSignout = () => {
        setConfirmSignout(false)
    }
    const handleConfirm = () => {
        closeConfirmSignout();
    };
    return (
        <div>
            <div>
                <header
                    className={
                        changeHeader
                        ? 'bg-white fixed z-50 top-0 left-0 w-full shadow-md transition duration-500'
                        : 'bg-transparent fixed z-50 top-0 left-0 w-full transition duration-500'
                    }
                >
                    <nav className='flex items-center mx-auto px-2 py-4'>
                        <Link>
                            <p className='font-medium text-2xl ml-5 flex items-center'>
                                Sync
                            </p>
                        </Link>
                        {/* Right Side */}
                        <div className='flex items-center absolute md:right-8 right-4'>
                            <div
                                ref={userRef}
                                className='ml-2 bg-blue-500 hover:bg-blue-400 text-white cursor-pointer transition-all py-2 px-2 rounded-full'
                                onClick={toggleUser}
                            >
                                <User />
                            </div>
                            {openUser && (
                                <div className='bg-white flex flex-col justify-start items-center text-start absolute right-0 z-10 mt-[200px] w-48 origin-top-right rounded-md py-2 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none px-2'>
                                    <Link onClick={()=>{setOpenUser(false)}} className='inline-flex'><span className='mr-3'><User /></span>Admins</Link>                                
                                </div>
                            )}
                        </div>
                    </nav>
                </header>
            </div>
            {/* Routes */}
            <div className='mt-16 md:mt-20 flex justify-center items-center mx-10 space-x-4'>
                <div className="flex flex-col w-1/4">
                    <div className="border-2 border-slate-300 rounded-md py-1 my-2">
                        <div className="inline-flex justify-center items-center mt-1">
                            <img src={Profile} alt="pic" className="rounded-full w-10 h-10 border-2 border-blue-500 p-0.5 mx-2" />
                            <h1 className="mr-8">OLIVER MARTIN</h1>
                            <button><Settings/></button>
                        </div>
                    </div>
                    <div className="bg-blue-50 rounded-md p-4 space-y-2 shadow-lg flex flex-col">
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Home/><h1 className="px-2">Home</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Explore/><h1 className="px-2">Feeds</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Friends/><h1 className="px-2">Friends</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Message/><h1 className="px-2">Messages</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Save/><h1 className="px-2">Bookmarks</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Like/><h1 className="px-2">Like Post</h1></span>
                        </Link>
                        <Link className="flex items-center justify-start hover:bg-blue-400 hover:text-white rounded-md py-1.5 px-2">
                            <span className="inline-flex"><Settings/><h1 className="px-2">Settings</h1></span>
                        </Link>
                    </div>
                    <div className="my-2">
                        <button className="bg-blue-500 w-full text-white rounded-md py-1.5 hover:bg-blue-400">
                            Create Post
                        </button>
                    </div>
                </div>
                <div className="flex-1">
                    <Post/>
                </div>
            </div>
        </div>
    );
}
