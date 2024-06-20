import React, { useEffect, useRef, useState } from 'react';
import User from '@/Assets/icons/User';
import { Link } from '@inertiajs/react';
import Notifications from '@/Assets/icons/Notifications';
import Message from '@/Assets/icons/Message';
import Friends from '@/Assets/icons/Friends';

const Header = ({ children }) => {
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
                                lOGO
                            </p>
                        </Link>
                        {/* Right Side */}
                        <div className='flex items-center absolute md:right-8 right-4'>
                            <span className='mx-1'>
                                <Friends/>
                            </span>
                            <span className='mx-1'>
                                <Message/>
                            </span>
                            <span className='mx-1'>
                                <Notifications/>
                            </span>
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
            <div className='mt-16 md:mt-0 lg:mt-16'>
                {
                    children
                }
            </div>
        </div>
    );
};

export default Header;